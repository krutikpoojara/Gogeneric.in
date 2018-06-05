jQuery(document).ready(function() {
	jQuery("body").append("<div class='demo-settings'></div>");
	jQuery(".demo-settings").append("<a href='#show-settings' class='demo-button'><span class='icon-text'><img src='images/demo/social.png' class='demo-icon' alt='' /></span>Social</a>");
	jQuery(".demo-settings").append("<div class='demo-options'>"+
										
										"<a href='#demo' rel='font-options' class='option'><img src='images/demo/fb.png' class='demo-icon' alt='' /><span>Facebook</span><font>Like us</font></a>"+
										"<div class='option-box' rel='font-options'>"+
											
"<iframe src='//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fgogeneric&amp;width=250&amp;height=558&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=true&amp;show_border=false' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:250px; height:558px;' allowTransparency='true'></iframe>"+											
											
										"</div>"+
										
										"<a href='#demo' rel='color-options' class='option'><img src='images/demo/twiter.png' class='demo-icon' alt='' /><span>Twiter</span><font>Folow us</font></a>"+
										"<div class='option-box' rel='color-options'>"+
										
											"<div alt='color-options'>"+
											"<a class='twitter-timeline' href='https://twitter.com/GoGeneric' data-widget-id='544226894028079105'>Tweets by @GoGeneric</a>"+
									"<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>"+		
												  
                      
											"</div>"+
										"</div>"+
										// "<div class='option-box sequal' rel='color-options'>"+
										// 	"<div alt='link-colors'>"+
										// 		"<b class='sub-title'>Link Colors</b>"+
										// 		"<a href='#' class='color-bulb active' style='background: #2582bd;'>&nbsp;</a>"+
										// 		"<a href='#' class='color-bulb' style='background: #75c025;'>&nbsp;</a>"+
										// 		"<a href='#' class='color-bulb' style='background: #c03425;'>&nbsp;</a>"+
										// 		"<a href='#' class='color-bulb' style='background: #8725c0;'>&nbsp;</a>"+
										// 		"<a href='#' class='color-bulb' style='background: #d86c0d;'>&nbsp;</a>"+
										// 	"</div>"+
										// "</div>"+
										//"<a href='#demo' rel='background' class='option'><img src='images/demo/gplus.png' class='demo-icon' alt='' /><span>Google plus</span><font>Add us to circle</font></a>"+
										/*"<div class='option-box' rel='background'>"+
											"<div alt='background'>"+
												"<b class='sub-title'>Background Texture</b>"+
												"<a href='#' class='color-bulb active' style='background: url(images/background-texture-3.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-texture-1.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-texture-2.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-texture-4.jpg);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-texture-5.jpg);'>&nbsp;</a>"+
											"</div>"+
										"</div>"+*/
										
									"</div>");
	
	jQuery(".demo-settings a[href=#demo]").click(function(){
		var thiselem = jQuery(this);
		thiselem.parent().find("div[rel="+thiselem.attr("rel")+"]").toggle();
		return false;
	});
	
	jQuery(".option-box div .color-bulb").click(function(){
		var thiselem = jQuery(this);
		var newcolor = thiselem.css("background-color");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "color-options"){
			jQuery(".header, .breaking-news .the-title, .widget > h3, .button, .hover-effect, .block-title, #wp-calendar td#today, .small-button, #writecomment p input[type=submit]").css("background-color", newcolor);
			jQuery(".widget .meta a").css("color", newcolor);
		}

		return false;
	});
	
	jQuery(".option-box div .color-bulb").click(function(){
		var thiselem = jQuery(this);
		var newcolor = thiselem.css("background");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "background"){
			jQuery("body").css("background", newcolor);
		}

		return false;
	});
	
	jQuery(".option-box div .font-bulb").click(function(){
		var thiselem = jQuery(this);
		var newfont = thiselem.css("font-family");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "font-options"){
			jQuery(".main-menu .the-menu li a, .secondary-menu ul li a, .list-title, h1, h2, h3, h4, h5, h6").css("font-family", newfont);
		}

		return false;
	});
	
	jQuery(".option-box div .option-bulb").click(function(){
		var thiselem = jQuery(this);
		var newsize = thiselem.attr("rel");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "option-box"){
			if(newsize == "boxed"){
				jQuery(".boxed").addClass("active");
			}else
			if(newsize == "full"){
				jQuery(".boxed").removeClass("active");
			}
		}

		return false;
	});
	
	jQuery(".demo-settings").mouseleave(function(){
		var thiselem = jQuery(this);
		thiselem.removeClass("active");
		return false;
	});
	
	jQuery(".demo-settings .demo-button").click(function(){
		jQuery(".demo-settings").addClass("active");
		return false;
	});
});
