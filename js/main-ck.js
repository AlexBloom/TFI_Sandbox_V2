$(document).ready(function(){function i(){var e=$(this).scrollTop();if(Math.abs(t-e)<=n)return;if(e>t&&e>r){$("#header").removeClass("nav-show").addClass("nav-hide");$(".breadcrumb").removeClass("nav-show").addClass("nav-hide")}else if(e+$(window).height()<$(document).height()){$("#header").removeClass("nav-hide").addClass("nav-show");$(".breadcrumb").removeClass("nav-hide").addClass("nav-show")}t=e}$("body").localScroll({offset:-50});$(".main").localScroll({offset:-75});$(".full-screen").css({height:$(window).height()});$(window).resize(function(){$(".full-screen").css({height:$(window).height()})});$("#primary-nav").addClass("closed");$("#toggle").click(function(){$(this).toggleClass("close");$("#primary-nav").toggleClass("closed");$("#primary-nav").toggleClass("open");$("body").toggleClass("overflow-hidden")});$("#header").addClass("nav-show");var e,t=0,n=5,r=$("header").outerHeight();$(window).scroll(function(t){e=!0});setInterval(function(){if(e){i();e=!1}},250);$("#top").addClass("closed");$(window).scroll(function(){var e=window.pageYOffset,t=300;if(e>t){$("#top").addClass("open");$("#top").removeClass("closed")}else{$("#top").removeClass("open");$("#top").addClass("closed")}});$(".project-content").addClass("collapsed");$(".local-link").each(function(){$(this).click(function(){$(this).parent().parent().parent().parent().next(".project-content").toggleClass("collapsed");$(this).find(".icon-plus").toggleClass("open")})});$(".left-column").waypoint(function(e){e=="down"?$(".sticky").addClass("fixed"):$(".sticky").removeClass("fixed")},{offset:50});$(".scrollnav-link").click(function(){$(".scrollnav-link").removeClass("current");$(this).addClass("current")});$("#project-1").waypoint(function(e){if(e=="down"){$(".scrollnav-link").removeClass("current");$("#scrollnav-1").addClass("current")}else $("#scrollnav-1").removeClass("current")},{offset:100});$("#project-2").waypoint(function(e){if(e=="down"){$(".scrollnav-link").removeClass("current");$("#scrollnav-2").addClass("current")}else $("#scrollnav-2").removeClass("current")},{offset:100});$("#project-3").waypoint(function(e){if(e=="down"){$(".scrollnav-link").removeClass("current");$("#scrollnav-3").addClass("current")}else $("#scrollnav-3").removeClass("current")},{offset:100});$("#project-4").waypoint(function(e){if(e=="down"){$(".scrollnav-link").removeClass("current");$("#scrollnav-4").addClass("current")}else $("#scrollnav-4").removeClass("current")},{offset:100});$("#project-5").waypoint(function(e){if(e=="down"){$(".scrollnav-link").removeClass("current");$("#scrollnav-5").addClass("current")}else $("#scrollnav-5").removeClass("current")},{offset:100});$("#project-6").waypoint(function(e){if(e=="down"){$(".scrollnav-link").removeClass("current");$("#scrollnav-6").addClass("current")}else $("#scrollnav-6").removeClass("current")},{offset:100});$(".play-video").click(function(){$(".video-overlay").css("display","block");$("#header").css("display","none")});$(".close-video").click(function(){$(".video-overlay").css("display","none");$("#header").css("display","block")})});