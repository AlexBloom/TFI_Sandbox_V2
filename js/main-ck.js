$(document).ready(function(){$("body").localScroll();$(".full-screen").css({height:$(window).height()});$(window).resize(function(){$(".full-screen").css({height:$(window).height()})});$("#primary-nav").addClass("closed");$("#toggle").click(function(){$(this).toggleClass("close");$("#primary-nav").toggleClass("closed");$("#primary-nav").toggleClass("open")});$("#top").addClass("closed");$(window).scroll(function(){var e=window.pageYOffset,t=400;if(e>t){$("#top").addClass("open");$("#top").removeClass("closed")}else{$("#top").removeClass("open");$("#top").addClass("closed")}});$(".project-content").addClass("collapsed");$("#project-1 .local-link").click(function(){$("#project-1 .project-content").toggleClass("collapsed")});$("#project-2 .local-link").click(function(){$("#project-2 .project-content").toggleClass("collapsed")});$("#project-3 .local-link").click(function(){$("#project-3 .project-content").toggleClass("collapsed")});$("#project-4 .local-link").click(function(){$("#project-4 .project-content").toggleClass("collapsed")});$("#project-5 .local-link").click(function(){$("#project-5 .project-content").toggleClass("collapsed")});$("#project-6 .local-link").click(function(){$("#project-6 .project-content").toggleClass("collapsed")});$(".scrollnav-link").click(function(){$(".scrollnav-link").removeClass("current");$(this).addClass("current")});$("#project-1").waypoint(function(e){$(".scrollnav-link").removeClass("current");$("#scrollnav-1").addClass("current")},{offset:"10%"});$("#project-2").waypoint(function(e){$(".scrollnav-link").removeClass("current");$("#scrollnav-2").addClass("current")},{offset:"10%"});$("#project-3").waypoint(function(e){$(".scrollnav-link").removeClass("current");$("#scrollnav-3").addClass("current")},{offset:"10%"});$("#project-4").waypoint(function(e){$(".scrollnav-link").removeClass("current");$("#scrollnav-4").addClass("current")},{offset:"10%"});$("#project-5").waypoint(function(e){$(".scrollnav-link").removeClass("current");$("#scrollnav-5").addClass("current")},{offset:"10%"});$("#project-6").waypoint(function(e){$(".scrollnav-link").removeClass("current");$("#scrollnav-6").addClass("current")},{offset:"10%"})});