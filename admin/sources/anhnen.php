<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$type = (string) $_REQUEST['type'];

switch($act){
	case "capnhat":
		get_photo();
		$template = "anhnen/item_add";
		break;
	case "save":
		save_photo();
		break;
	case "delete_img":
		delete_photo();
		break;			
	default:
		$template = "index";
}

function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}
function get_photo(){
	global $d, $item,$type;

	$sql = "select * from #_anhnen where type='".$type."' limit 0,1";
	$d->query($sql);
	if($d->num_rows()==0)
	{
		$data['hienthi'] = '1';
		$data['type'] = $type;
		
		$d->setTable('anhnen');
		if($d->insert($data))
			transfer("Dữ liệu được khởi tạo","index.php?com=anhnen&act=capnhat&type=".$type);
		else
			transfer("Khởi tạo dữ liệu lỗi","index.php?com=anhnen&act=capnhat&type=".$type);
	}
	$item = $d->fetch_array();
}

function save_photo(){
	global $d,$type;

	$file_name = $_FILES['img']['name'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=anhnen&act=capnhat&type=".$type."");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
			if($photo = upload_image("img", _format_duoihinh,_upload_hinhanh,$file_name)){
				$data['photo'] = $photo;
				$d->setTable('anhnen');
				$d->setWhere('id', $id);
				$d->select();
				if($d->num_rows()>0){
					$row = $d->fetch_array();
					delete_file(_upload_hinhanh.$row['photo']);
				}
			}
						
			$data['color'] = $_POST['color'];
			$data['repea'] = $_POST['repeat'];
			$data['bgsize'] = $_POST['bgsize'];

			$data['position_y'] = $_POST['position_y'];
			$data['position_x'] = $_POST['position_x'];
			$data['fixed'] = $_POST['fixed'];
			$data['type']=$type;
			$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
			$d->reset();
			$d->setTable('anhnen');
			$d->setWhere('id', $id);
			if(!$d->update($data)) transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=anhnen&act=capnhat&type=".$type."");
			redirect("index.php?com=anhnen&act=capnhat&type=".$type."");
			
	}
}
function delete_photo(){
	global $d,$type;		
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id, photo from #_anhnen where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_hinhanh.$row['photo']);	
			}
		$sql = "UPDATE #_anhnen SET photo ='' WHERE  id = '".$id."'";
		$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=anhnen&act=capnhat&type='".$type."'");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=anhnen&act=capnhat&type=".$type."");
	}else transfer("Không nhận được dữ liệu", "index.php?com=anhnen&act=capnhat&type=".$type."");
}
?>	