/* Touch Detection *//*var hasTouch = 'ontouchstart' in window || 'createTouch' in document;

 ================================================================================================================== Has Touch  
if(hasTouch){
}

if($(window).width() <760){
}

if($(window).width() >760){
}
*/$(document).ready(function(){$("body").localScroll();$(".full-screen").css({height:$(window).height()});$(window).resize(function(){$(".full-screen").css({height:$(window).height()})});$("#primary-nav").addClass("closed");$("#toggle").click(function(){$("#primary-nav").toggleClass("closed");$("#primary-nav").toggleClass("open");$("#toggleopen").toggleClass("open");$("#toggleopen").toggleClass("closed");$("#toggleclose").toggleClass("open");$("#toggleclose").toggleClass("closed")});$(".secondary").addClass("visuallyhidden");$("#discover").click(function(){$("#discover-secondary").toggleClass("visuallyhidden")});$("#participate").click(function(){$("#participate-secondary").toggleClass("visuallyhidden")});$("#build").click(function(){$("#build-secondary").toggleClass("visuallyhidden")})});