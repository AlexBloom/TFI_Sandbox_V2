


$(document).ready(function () {

		// Fire LocalScroll
		$('body').localScroll();
	
		// Size Full-Screen Videos, Images, & Slideshows to window height.
		$('.full-screen').css({height:$(window).height()});

		$(window).resize(function() {
			$('.full-screen').css({height:$(window).height()});
		});
	
	
	//Menu Toggle
	//$('#primary').prepend('<div id="menu-icon">TFI SANDBOX <span> </span> </div>');
	$('#primary-nav').addClass('closed');
 
	$("#toggle").click(function(){
		$(this).toggleClass('close');
	$('#primary-nav').toggleClass('closed');
	$('#primary-nav').toggleClass('open');
   });
   
   
   //Show Top Link After Scrolling
   $("#top").addClass('closed')
   $(window).scroll(function() {
       var y_scroll_pos = window.pageYOffset;
       var scroll_pos_test = 400;             
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
       
	   $('#project-1 .local-link').click(function() {
           $('#project-1 .project-content').toggleClass('collapsed');
       });
	   
	   $('#project-2 .local-link').click(function() {
           $('#project-2 .project-content').toggleClass('collapsed');
       });
	   
	   $('#project-3 .local-link').click(function() {
           $('#project-3 .project-content').toggleClass('collapsed');
       });
	   
	   $('#project-4 .local-link').click(function() {
           $('#project-4 .project-content').toggleClass('collapsed');
       });
	   
	   $('#project-5 .local-link').click(function() {
           $('#project-5 .project-content').toggleClass('collapsed');
       });
	   
	   $('#project-6 .local-link').click(function() {
           $('#project-6 .project-content').toggleClass('collapsed');
       });
	   
   
	   
     // Add Current Class to ScrollNav of Currently Depressed Item
    	$('.scrollnav-link').click(function() {
    		$('.scrollnav-link').removeClass('current');
    		$(this).addClass('current');
    	});
	   
	   
   	// Add Current Class to ScrollNav of Currently Viewed Project
	
   	$('#project-1').waypoint(function(direction) {
   		$('.scrollnav-link').removeClass('current');
   		$('#scrollnav-1').addClass('current');
   	}, { offset: '0' });
	
   	$('#project-2').waypoint(function(direction) {
   		$('.scrollnav-link').removeClass('current');
   		$('#scrollnav-2').addClass('current');
   	}, { offset: '0' });
	
   	$('#project-3').waypoint(function(direction) {
   		$('.scrollnav-link').removeClass('current');
   		$('#scrollnav-3').addClass('current');
   	}, { offset: '0' });
	
   	$('#project-4').waypoint(function(direction) {
   		$('.scrollnav-link').removeClass('current');
   		$('#scrollnav-4').addClass('current');
   	}, { offset: '0' });
	
   	$('#project-5').waypoint(function(direction) {
   		$('.scrollnav-link').removeClass('current');
   		$('#scrollnav-5').addClass('current');
   	}, { offset: '10%' });
	
   	$('#project-6').waypoint(function(direction) {
   		$('.scrollnav-link').removeClass('current');
   		$('#scrollnav-6').addClass('current');
   	}, { offset: '10%' });
   

});
   
   

