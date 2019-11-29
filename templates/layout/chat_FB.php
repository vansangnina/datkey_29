<a class="btn-call pinkBg" href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>" target="_blank">
	<svg class="shake-anim" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/></svg>
	<span class="ripple pinkBg"></span>
	<span class="ripple pinkBg"></span>
	<span class="ripple pinkBg"></span>
</a>
<a class="btn-zalo pinkBg" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>" target="_blank">
	<img class="shake-anim" src="images/icon/zalo.png" alt="Zalo">
	<span class="ripple pinkBg"></span>
	<span class="ripple pinkBg"></span>
	<span class="ripple pinkBg"></span>
</a>
<div id="btn-FB">
	<div class="js-facebook-messenger-box onApp rotate bottom-right cfm rubberBand animated" data-anim="rubberBand">
		<svg id="fb-msng-icon" data-name="messenger icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.47 30.66"><path d="M29.56,14.34c-8.41,0-15.23,6.35-15.23,14.19A13.83,13.83,0,0,0,20,39.59V45l5.19-2.86a16.27,16.27,0,0,0,4.37.59c8.41,0,15.23-6.35,15.23-14.19S38,14.34,29.56,14.34Zm1.51,19.11-3.88-4.16-7.57,4.16,8.33-8.89,4,4.16,7.48-4.16Z" transform="translate(-14.32 -14.34)" style="fill:#fff"></path></svg>
		<svg id="close-icon" data-name="close icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.98 39.99"><path d="M48.88,11.14a3.87,3.87,0,0,0-5.44,0L30,24.58,16.58,11.14a3.84,3.84,0,1,0-5.44,5.44L24.58,30,11.14,43.45a3.87,3.87,0,0,0,0,5.44,3.84,3.84,0,0,0,5.44,0L30,35.45,43.45,48.88a3.84,3.84,0,0,0,5.44,0,3.87,3.87,0,0,0,0-5.44L35.45,30,48.88,16.58A3.87,3.87,0,0,0,48.88,11.14Z" transform="translate(-10.02 -10.02)" style="fill:#fff"></path></svg>
	</div>
	<div class="js-facebook-messenger-container">
		<div class="js-facebook-messenger-top-header"><span>Hotline tư vấn miễn phí: <?=preg_replace('/[^0-9]/','',$company['dienthoai']);?></span></div>
		<div class="fb-page" data-tabs="messages" data-href="<?=$company['facebook']?>" data-width="320" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
	</div>
</div>
<script>
	jQuery(document).ready(function(){jQuery(".js-facebook-messenger-box").on("click",function(){jQuery(".js-facebook-messenger-box, .js-facebook-messenger-container").toggleClass("open"),jQuery(".js-facebook-messenger-tooltip").length&&jQuery(".js-facebook-messenger-tooltip").toggle()}),jQuery(".js-facebook-messenger-box").hasClass("cfm")&&setTimeout(function(){jQuery(".js-facebook-messenger-box").addClass("rubberBand animated")},3500),jQuery(".js-facebook-messenger-tooltip").length&&(jQuery(".js-facebook-messenger-tooltip").hasClass("fixed")?jQuery(".js-facebook-messenger-tooltip").show():jQuery(".js-facebook-messenger-box").on("hover",function(){jQuery(".js-facebook-messenger-tooltip").show()}),jQuery(".js-facebook-messenger-close-tooltip").on("click",function(){jQuery(".js-facebook-messenger-tooltip").addClass("closed")}))});
</script>
<style type="text/css">
@-moz-keyframes shake-anim { 0%{transform:rotate(0) scale(1) skew(1deg) } 10%{-moz-transform:rotate(-25deg) scale(1) skew(1deg) } 20%{-moz-transform:rotate(25deg) scale(1) skew(1deg) } 30%{-moz-transform:rotate(-25deg) scale(1) skew(1deg) } 40%{-moz-transform:rotate(25deg) scale(1) skew(1deg) } 50%{-moz-transform:rotate(0) scale(1) skew(1deg) } 100%{-moz-transform:rotate(0) scale(1) skew(1deg) } }
@-webkit-keyframes shake-anim { 0%{-webkit-transform:rotate(0) scale(1) skew(1deg) } 10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg) } 20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg) } 30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg) } 40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg) } 50%{-webkit-transform:rotate(0) scale(1) skew(1deg) } 100%{-webkit-transform:rotate(0) scale(1) skew(1deg) } }
@-o-keyframes shake-anim { 0%{-o-transform:rotate(0) scale(1) skew(1deg) } 10%{-o-transform:rotate(-25deg) scale(1) skew(1deg) } 20%{-o-transform:rotate(25deg) scale(1) skew(1deg) } 30%{-o-transform:rotate(-25deg) scale(1) skew(1deg) } 40%{-o-transform:rotate(25deg) scale(1) skew(1deg) } 50%{-o-transform:rotate(0) scale(1) skew(1deg) } 100%{-o-transform:rotate(0) scale(1) skew(1deg) } }
.shake-anim {-webkit-animation:shake-anim 1s infinite ease-in-out; -moz-animation:shake-anim 1s infinite ease-in-out; -ms-animation:shake-anim 1s infinite ease-in-out; -o-animation:shake-anim 1s infinite ease-in-out; animation:shake-anim 1s infinite ease-in-out; -webkit-transform-origin:50% 50%; -moz-transform-origin:50% 50%; -ms-transform-origin:50% 50%; -o-transform-origin:50% 50%; transform-origin:50% 50% }
.btn-call { height:60px; width:60px; position:fixed; right: 15px; bottom: 250px; text-align:center; border-radius:100px; z-index:999999999; display: flex; justify-content: center; align-items: center; }
.btn-call svg { width: 25px; height: 25px; }
.btn-call path { fill: #fff; }
.btn-zalo { height:60px; width:60px; position:fixed; right: 15px; bottom: 150px; text-align:center; border-radius:100px; z-index:999999999; }
.pinkBg { background-color: #1182FC; }
.btn-zalo img { display: block; }
.ripple{ position:absolute; width:100px; height:100px; z-index:-1; left:50%; top:50%; opacity:0; margin:-50px 0 0 -50px; border-radius:100px; -webkit-animation:ripple 1.8s infinite; animation:ripple 1.8s infinite }
.ripple:nth-child(2){ animation-delay:.3s; -webkit-animation-delay:.3s }
.ripple:nth-child(3){ animation-delay:.6s; -webkit-animation-delay:.6s }
@-webkit-keyframes ripple{ 0%{opacity:1; -webkit-transform:scale(0); transform:scale(0) } 100%{opacity:0; -webkit-transform:scale(1); transform:scale(1) } }
@keyframes ripple{ 0%{opacity:1; -webkit-transform:scale(0); transform:scale(0) } 100%{opacity:0; -webkit-transform:scale(1); transform:scale(1) } }

.js-facebook-messenger-container.closed,.js-facebook-messenger-tooltip.closed{display:none!important}.js-facebook-messenger-tooltip{bottom:97px;right:97px}.js-facebook-messenger-tooltip{color:#404040;background:#fff}.js-facebook-messenger-box,.js-facebook-messenger-button,.js-facebook-messenger-tooltip{z-index:999}.js-facebook-messenger-tooltip{display:none;position:fixed;text-align:center;border-radius:10px;overflow:hidden;font-size:12px;line-height:1;padding:10px;border:1px solid rgba(0,0,0,0.1);box-shadow:rgba(0,0,0,0.15) 0 2pt 10pt;z-index:1.0E+30}.js-facebook-messenger-close-tooltip{width:10px;height:10px;display:inline-block;cursor:pointer;margin-left:10px}.js-facebook-messenger-box.rubberBand{-webkit-animation-name:rubberBand;animation-name:rubberBand}.js-facebook-messenger-box.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.js-facebook-messenger-box{bottom:70px;right:15px}.js-facebook-messenger-box{background:#1182fc}.js-facebook-messenger-box,.js-facebook-messenger-button,.js-facebook-messenger-tooltip{z-index:999}.js-facebook-messenger-box{width:60px;height:60px;display:block;position:fixed;cursor:pointer;text-align:center;line-height:60px;background:#1182FC;border-radius:100%;overflow:hidden;-webkit-box-shadow:1px 1px 4px 0 rgba(0,0,0,0.3);-moz-box-shadow:1px 1px 4px 0 rgba(0,0,0,0.3);box-shadow:1px 1px 4px 0 rgba(0,0,0,0.3)}.js-facebook-messenger-box.rotate svg#fb-msng-icon{transform:rotate(0deg)}.js-facebook-messenger-box svg#fb-msng-icon{width:30px;height:30px;position:absolute;top:15px;left:15px;opacity:1;overflow:hidden;-webkit-transition:opacity 160ms ease-in-out,transform 160ms ease-in-out;-moz-transition:opacity 160ms ease-in-out,transform 160ms ease-in-out;-o-transition:opacity 160ms ease-in-out,transform 160ms ease-in-out;transition:opacity 160ms ease-in-out,transform 160ms ease-in-out}.js-facebook-messenger-box.rotate svg#close-icon{transform:rotate(-45deg)}.js-facebook-messenger-box svg#close-icon{opacity:0;width:20px;height:20px;position:absolute;top:20px;left:20px;-webkit-transition:opacity 160ms ease-in-out,transform 160ms ease-in-out;-moz-transition:opacity 160ms ease-in-out,transform 160ms ease-in-out;-o-transition:opacity 160ms ease-in-out,transform 160ms ease-in-out;transition:opacity 160ms ease-in-out,transform 160ms ease-in-out}.js-facebook-messenger-container{transform:translateY(50px);bottom:110px;right:35px}.js-facebook-messenger-container,.js-facebook-messenger-container-button{z-index:999999999999999999999999999999}.js-facebook-messenger-container{position:fixed;opacity:0;border-radius:10px;pointer-events:none;box-shadow:0 1px 6px rgba(0,0,0,0.06),0 2px 32px rgba(0,0,0,0.16);-webkit-transition:transform 160ms ease-in-out,opacity 160ms ease-in-out;-moz-transition:transform 160ms ease-in-out,opacity 160ms ease-in-out;-o-transition:transform 160ms ease-in-out,opacity 160ms ease-in-out;transition:transform 160ms ease-in-out,opacity 160ms ease-in-out}.js-facebook-messenger-top-header{width:300px}.js-facebook-messenger-top-header{color:#fff;background:#1182fc}.js-facebook-messenger-top-header{display:block;position:relative;width:300px;background:#1182FC;color:#fff;text-align:center;line-height:1;padding:10px;font-size:14px;border-top-left-radius:10px;border-top-right-radius:10px}.js-facebook-messenger-container iframe,.js-facebook-messenger-container-button iframe{border-bottom-left-radius:10px;border-bottom-right-radius:10px}.js-facebook-messenger-box,.js-facebook-messenger-button,.js-facebook-messenger-tooltip{z-index:999}.js-facebook-messenger-container,.js-facebook-messenger-container-button{z-index:99999999999999999999999999999999999999999}.js-facebook-messenger-top-header{color:#fff;background:#1182fc}.js-facebook-messenger-box{background:#1182fc}.js-facebook-messenger-top-header{width:300px}.js-facebook-messenger-tooltip{color:#404040;background:#fff}.js-facebook-messenger-box{bottom:70px;right:15px}.js-facebook-messenger-container{transform:translateY(50px);bottom:135px;right:35px}.js-facebook-messenger-container.open{transform:translateY(0px);opacity:1;pointer-events:all}.js-facebook-messenger-tooltip{bottom:97px;right:97px}.js-facebook-messenger-box.open svg#fb-msng-icon{opacity:0}.js-facebook-messenger-box.rotate.open svg#close-icon{transform:rotate(0deg)}.js-facebook-messenger-box.open svg#close-icon{opacity:1}
</style>