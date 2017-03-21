/*!
 * VerticalMenu v1.0
 * Copyright 2015 Carlos.All rights reserved.
 * Licensed under MIT (https://github.com/echoulen/VerticalMenu/LICENSE)
 */
$.fn.verticalmenu = function(conf){

	var duration = 200;	//default duration
	if(conf && conf.duration)
		duration = conf.duration

	$(this).addClass("verticalmenu");

	$(this).find("li").each(function(index){
		if($(this).find("ul").length > 0)
		{
			var span = $('<span />').appendTo($(this).find("> a").first());
			span.addClass("glyphicon").addClass("glyphicon-menu-left");
			span.css('float','right');
			$(this).addClass("hasChild");
			$(this).find("> a").click(function(e) {
				clickEffect($(this).parent(), duration);
			});
		}
	});
};


//Menu effect
function clickEffect(root, sec){
	var attr = root.attr("isClicked");
	if(typeof attr != typeof undefined && attr != false){
		root.removeAttr("isClicked");
		root.find("> ul").slideUp(sec);
		root.find(" > a >span.glyphicon.glyphicon-menu-down").removeClass("glyphicon glyphicon-menu-down").addClass("glyphicon glyphicon-menu-left");
	}
	else{
		root.attr("isClicked", true);
		root.find("> ul").slideDown(sec);
		root.find(" > a > span.glyphicon.glyphicon-menu-left").removeClass("glyphicon glyphicon-menu-left").addClass("glyphicon glyphicon-menu-down");
	}
}