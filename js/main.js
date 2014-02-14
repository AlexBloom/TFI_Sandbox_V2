


$(document).ready(function () {
		// Fire LocalScroll
		$('body').localScroll();
	
		// Size Full-Screen Videos, Images, & Slideshows to window height.
		$('.full-screen').css({height:$(window).height()});
		$(window).resize(function() {
			$('.full-screen').css({height:$(window).height()});
		});
	
	
	//Menu Toggle
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
    
$('.local-link').each(function() {
	$(this).click(function(){
		$(this).parent().parent().parent().parent().next('.project-content').toggleClass('collapsed');
		$(this).parent().parent().toggleClass('open');
		$(this).find('.icon-plus').toggleClass('open');
	});
});
	
	   
   // Add Current Class to ScrollNav of Currently Depressed Item
    	$('.scrollnav-link').click(function() {
    		$('.scrollnav-link').removeClass('current');
    		$(this).addClass('current');
    	});	   
	   
	   
   	// Add Current Class to ScrollNav of Currently Scrolled Project With Waypoints	
 /* $('.project').each(function() { 
	  $(this).waypoint(function(direction) {     
	     if(direction == 'down'){
			 //find the corresponding scrollnav data attribute
			 $(this).find('data-attribute')
			 
		     $('.scrollnav-link').addClass('current');
	     } //if direction is back, remove it
	      else $('.scrollnav-link').removeClass('current');
	   },
	   {
	     offset: 100
	   }
	 ); 
	}
  );*/
	 
	 
  //The Long Hard Stupid Way
  
    $('#project-1').waypoint(
     function(direction) {   
       // This div is level with the top  
       if(direction == 'down'){
  	    $('.scrollnav-link').removeClass('current');
  	     $('#scrollnav-1').addClass('current');
       } //find('.waypoint-inner')
         else $('#scrollnav-1').removeClass('current');
     },
     {
		 offset: 100
	 }
   );
 
   $('#project-2').waypoint(
    function(direction) {   
      // This div is level with the top  
      if(direction == 'down'){
 	    $('.scrollnav-link').removeClass('current');
 	     $('#scrollnav-2').addClass('current');
      } //find('.waypoint-inner')
        else $('#scrollnav-2').removeClass('current');
		
    },
    {
		offset: 100
	}
  );
 
    $('#project-3').waypoint(
     function(direction) {   
       // This div is level with the top  
       if(direction == 'down'){
  	    $('.scrollnav-link').removeClass('current');
  	     $('#scrollnav-3').addClass('current');
       } //find('.waypoint-inner')
         else $('#scrollnav-3').removeClass('current');
		 
     },
     {
		 offset: 100
	 }
   );

   $('#project-4').waypoint(
    function(direction) {   
      // This div is level with the top  
      if(direction == 'down'){
 	    $('.scrollnav-link').removeClass('current');
 	     $('#scrollnav-4').addClass('current');
      } //find('.waypoint-inner')
        else $('#scrollnav-4').removeClass('current');
		
    },
    {
		offset: 100
	}
  );
  
  $('#project-5').waypoint(
   function(direction) {   
     // This div is level with the top  
     if(direction == 'down'){
	    $('.scrollnav-link').removeClass('current');
	     $('#scrollnav-5').addClass('current');
     } //find('.waypoint-inner')
       else $('#scrollnav-5').removeClass('current');
	   
   },
   {
	   offset: 100
   }
 );
 
 $('#project-6').waypoint(
  function(direction) {   
    // This div is level with the top  
    if(direction == 'down'){
    $('.scrollnav-link').removeClass('current');
     $('#scrollnav-6').addClass('current');
    } //find('.waypoint-inner')
      else $('#scrollnav-6').removeClass('current');
	  
  },
  {
	  offset: 100
  }
);
 
  
 
 
 
 
 //End Doc Ready Function

});
   
   

