$("#primary-nav").addClass("closed");$(document).ready(function(){function i(){var e=$(this).scrollTop();if(Math.abs(t-e)<=n)return;if(e>t&&e>r){$("#header").removeClass("nav-show").addClass("nav-hide");$(".breadcrumb").removeClass("nav-show").addClass("nav-hide")}else if(e+$(window).height()<$(document).height()){$("#header").removeClass("nav-hide").addClass("nav-show");$(".breadcrumb").removeClass("nav-hide").addClass("nav-show")}t=e}$("body").localScroll({offset:0});$(".left-column").localScroll({offset:-65});$(".full-screen").css({"min-height":$(window).height()});$(window).resize(function(){$(".full-screen").css({"min-height":$(window).height()})});$("#toggle").click(function(){$(this).toggleClass("close");$("#primary-nav").toggleClass("closed");$("#primary-nav").toggleClass("open");$("body").toggleClass("overflow-hidden")});$(".tertiary").click(function(){$(this).toggleClass("dropdown-open")});$("#header").addClass("nav-show");$(".breadcrumb").addClass("nav-show");var e,t=0,n=5,r=$("header").outerHeight();$(window).scroll(function(t){e=!0});setInterval(function(){if(e){i();e=!1}},250);$("#top").addClass("closed");$(window).scroll(function(){var e=window.pageYOffset,t=300;if(e>t){$("#top").addClass("open");$("#top").removeClass("closed")}else{$("#top").removeClass("open");$("#top").addClass("closed")}});$(".project-content").addClass("collapsed");$(".local-link").each(function(){$(this).click(function(){$(this).parent().next(".project-content").toggleClass("collapsed");$(this).find(".icon-plus").toggleClass("open")})});$(".left-column").waypoint(function(e){e=="down"?$(".sticky").addClass("fixed"):$(".sticky").removeClass("fixed")},{offset:50});$(".scrollnav-link").click(function(){$(".scrollnav-link").removeClass("current");$(this).addClass("current")});$(function(){$(document).scroll(function(){$(".anchor").each(function(){var e=$(this),t=e.offset().top-$(window).scrollTop();if(t<100){$(".scrollnav-link").removeClass("current");$('.scrollnav-link[href="#'+e.attr("id")+'"]').addClass("current")}})})});$("#IL-All").addClass("on");$("#IL-All").click(function(){$(".filter-link").removeClass("on");$(".project").removeClass("hidden");$(this).addClass("on")});$("#IL-Web").click(function(){$(".filter-link").removeClass("on");$(".project").addClass("hidden");$(".Web").removeClass("hidden");$(this).addClass("on")});$("#IL-Installations").click(function(){$(".filter-link").removeClass("on");$(".project").addClass("hidden");$(".Installations").removeClass("hidden");$(this).addClass("on")});$("#IL-Apps").click(function(){$(".filter-link").removeClass("on");$(".project").addClass("hidden");$(".Apps").removeClass("hidden");$(this).addClass("on")});$("#IL-Other").click(function(){$(".filter-link").removeClass("on");$(".project").addClass("hidden");$(".Other").removeClass("hidden");$(this).addClass("on")});$("#Festival-List").addClass("on");$("#Map").addClass("hidden");$("#Festival-List").click(function(){$(".filter-link").removeClass("on");$("#Map").addClass("hidden");$("#List").removeClass("hidden");$(this).addClass("on")});$("#Festival-Map").click(function(){$(".filter-link").removeClass("on");$("#List").addClass("hidden");$("#Map").removeClass("hidden");$(this).addClass("on")});$("#share-buttons").addClass("closed");$("#share-engage").click(function(){$("#share-buttons").toggleClass("closed")});$(".play-video").click(function(){$(".video-overlay").css("display","block");$("#header").css("display","none");$("body").addClass("overflow-hidden")});$(".close-video").click(function(){$(".video-overlay").css("display","none");$("#header").css("display","block");$("body").removeClass("overflow-hidden")});if($(window).width()>1e3){var s=new Array('<video class="background-video" id="home-bg" autoplay loop muted> <source src="video/sd/HomepageLoop_1-SD.mp4" type="video/mp4"/> </video>','<video class="background-video" id="home-bg" autoplay loop muted> <source src="video/sd/HomepageLoop_2-SD.mp4" type="video/mp4"/> </video>','<video class="background-video" id="home-bg" autoplay loop muted> <source src="video/sd/HomepageLoop_3-SD.mp4" type="video/mp4"/> </video>'),o=s[Math.floor(Math.random()*s.length)];$("#home-bg").replaceWith(o)}$(window).width()<800&&$(".background-video").addClass("display-none")});