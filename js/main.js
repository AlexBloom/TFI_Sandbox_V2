// Fire LocalScroll
$(document).ready(function () {
	$('#primary-nav').addClass('closed'); 
	
		// Fire LocalScroll
		$('body').localScroll({offset:0});
		$('.left-column').localScroll({offset:-65});
	
		// Size Full-Screen Videos, Images, & Slideshows to window height.
		$('.full-screen').css({"min-height":$(window).height()});
		//$('#main >article >header').css({height:$(window).height()/2});
		$(window).resize(function() {
			$('.full-screen').css({"min-height":$(window).height()});
			//$('#main >article >header').css({height:$(window).height()/2});
		});
	
	//Site-Nav Toggle
	$("#toggle").click(function(){
		$(this).toggleClass('close');
	$('#primary-nav').toggleClass('closed');
	$('#primary-nav').toggleClass('open');
	$('body').toggleClass('overflow-hidden');
   });
   
   //Tertiary Dropdown Toggle
	$(".tertiary").click(function(){
		$(this).toggleClass('dropdown-open');
	  });
   
   // Hide / Show Header on Scroll - Credit: Marius Craciunoiu
   $('#header').addClass('nav-show');
   $('.breadcrumb').addClass('nav-show');
   // Hide Header on on scroll down
   var didScroll;
   var lastScrollTop = 0;
   var delta = 5;
   var navbarHeight = $('header').outerHeight();

   $(window).scroll(function(event){
       didScroll = true;
   });

   setInterval(function() {
       if (didScroll) {
           hasScrolled();
           didScroll = false;
       }
   }, 250);

   function hasScrolled() {
       var st = $(this).scrollTop();
    
       // Make sure they scroll more than delta
       if(Math.abs(lastScrollTop - st) <= delta)
           return;
    
       // If they scrolled down and are past the navbar, add class .nav-up.
       // This is necessary so you never see what is "behind" the navbar.
       if (st > lastScrollTop && st > navbarHeight){
           // Scroll Down
           $('#header').removeClass('nav-show').addClass('nav-hide');
		   $('.breadcrumb').removeClass('nav-show').addClass('nav-hide');
		   
       } else {
           // Scroll Up
           if(st + $(window).height() < $(document).height()) {
               $('#header').removeClass('nav-hide').addClass('nav-show');
			   $('.breadcrumb').removeClass('nav-hide').addClass('nav-show');
			   
           }
       }
    
       lastScrollTop = st;
   }

   //Show Top Link After Scrolling
   $("#top").addClass('closed');
   $(window).scroll(function() {
       var y_scroll_pos = window.pageYOffset;
       var scroll_pos_test = 300;             
   	// set to whatever you want it to be
       if(y_scroll_pos > scroll_pos_test) {
   	   $("#top").addClass('open');
	   $("#top").removeClass('closed');
       }
   	else
   	{
		$("#top").removeClass('open');
   		$("#top").addClass('closed');
   	}
   });
   
//Open and Close Projects 
$('.project-content').addClass('collapsed');
    
$('.local-link').each(function() {
	$(this).click(function(){
		$(this).parent().next('.project-content').toggleClass('collapsed');
		//$(this).parent().parent().toggleClass('open');
		$(this).find('.icon-plus').toggleClass('open');
	});
});
	
// Sticky Navigations		
 $('.left-column').waypoint(
  function(direction) {   
    // This div is level with the top  
    if(direction == 'down'){
     $('.sticky').addClass('fixed');
    } //find('.waypoint-inner')
      else  $('.sticky').removeClass('fixed');
  },
  {
	 offset: 50
 }
);

// Active Link Highlighting
 // Add Current Class to ScrollNav of Currently Depressed Item
  	$('.scrollnav-link').click(function() {
  		$('.scrollnav-link').removeClass('current');
  		$(this).addClass('current');
  	});	   
	
//Side Nav Highlighting 
$(function(){
    $(document).scroll(function(){
        $('.anchor').each(function(){
            var $this = $(this),
            pos   = $this.offset().top - $(window).scrollTop();
            if(pos < 100 ){
                $('.scrollnav-link').removeClass('current');
                $('.scrollnav-link[href="#'+$this.attr('id')+'"]').addClass('current');
            }
        });

    });
});

// Filtering Projects By Type
$('#IL-All').addClass('on');

$('.openAll').click(function() {
	$('.filter-link').removeClass('on');
	$('.project').removeClass('hidden');
	$(this).addClass('on');
});	

$('#IL-All').click(function() {
	$('.filter-link').removeClass('on');
	$('.project').removeClass('hidden');
	$(this).addClass('on');
});	

$('#IL-Web').click(function() {
	$('.filter-link').removeClass('on');
	$('.project').addClass('hidden');
	$('.Web').removeClass('hidden');
	$(this).addClass('on');
});	

$('#IL-Installations').click(function() {
	$('.filter-link').removeClass('on');
	$('.project').addClass('hidden');
	$('.Installations').removeClass('hidden');
	$(this).addClass('on');
});	

$('#IL-Apps').click(function() {
	$('.filter-link').removeClass('on');
	$('.project').addClass('hidden');
	$('.Apps').removeClass('hidden');
	$(this).addClass('on');
});	

$('#IL-Other').click(function() {
	$('.filter-link').removeClass('on');
	$('.project').addClass('hidden');
	$('.Other').removeClass('hidden');
	$(this).addClass('on');
});	


// Filter Map and List
$('#Festival-List').addClass('on');
$('#Map').addClass('hidden');
$('#Festival-List').click(function() {
	$('.filter-link').removeClass('on');
	$('#Map').addClass('hidden');
	$('#List').removeClass('hidden');
	$(this).addClass('on');
});	
$('#Festival-Map').click(function() {
	$('.filter-link').removeClass('on');
	$('#List').addClass('hidden');
	$('#Map').removeClass('hidden');
	$(this).addClass('on');
	$.getScript("js/festivalmap.js");	
});	


//SHARING
$('#share-buttons').addClass('closed');
$('#share-engage').click(function() {
	$('#share-buttons').toggleClass('closed');
});
 

// Show and Play Full Screen Videos
	$(".play-video").click(function(){
		$('.video-overlay').css("display","block");
		$('#header').css("display","none");
		$('body').addClass('overflow-hidden');
	});

	$(".close-video").click(function(){
		$('.video-overlay').css("display","none");
		$('#header').css("display","block");
		$('body').removeClass('overflow-hidden');
	});
 
	// Load Medium Res Background Video
	
	if ($(window).width() > 1000 ){	
		
		    var sdVideos = new Array(
			'<video class="background-video" id="home-bg" autoplay loop muted> <source src="video/sd/HomepageLoop_1-SD.mp4" type="video/mp4"/> <source src="video/sd/HomepageLoop_1-SD.ogg" type="video/ogg"/> </video>',
			'<video class="background-video" id="home-bg" autoplay loop muted> <source src="video/sd/HomepageLoop_2-SD.mp4" type="video/mp4"/> <source src="video/sd/HomepageLoop_2-SD.ogg" type="video/ogg"/> </video>',
			'<video class="background-video" id="home-bg" autoplay loop muted> <source src="video/sd/HomepageLoop_3-SD.mp4" type="video/mp4"/> <source src="video/sd/HomepageLoop_3-SD.ogg" type="video/ogg"/> </video>'
			),
		    randomVid = sdVideos[Math.floor( Math.random() * sdVideos.length )];
		    $('#home-bg').replaceWith( randomVid );
		
	}
	if($(window).width() < 800 ) {
		$('.background-video').addClass('display-none');
	}
});

