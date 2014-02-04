


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
	$('#primary-nav').toggleClass('closed');
	$('#primary-nav').toggleClass('open');
	$('#toggleopen').toggleClass('open');
	$('#toggleopen').toggleClass('closed');
	$('#toggleclose').toggleClass('open');
	$('#toggleclose').toggleClass('closed');
   });
   
  /* 
   //Close Secondary & Tertiary Links
   $('.secondary').addClass('visuallyhidden');
   //$('.tertiary').addClass('visuallyhidden');
   
   //Open Specific Secondary Menus
   $("#discover").click(function(){
	   $('#discover-secondary').toggleClass('visuallyhidden');
   });
   
   $("#participate").click(function(){
	   $('#participate-secondary').toggleClass('visuallyhidden');
   });
   
   $("#build").click(function(){
	   $('#build-secondary').toggleClass('visuallyhidden');
   });
   
   //Open Specific Tertiary Menus
   
   */
   
   
   
/*   //Open and Close Projects
$('.project-content').addClass('collapsed');
       
	   $('.project-header').click(function() {
           $('.project-content').toggleClass('collapsed');
           $('.project-content').siblings().not('.project-content').toggleClass('collapsed');
       });
*/
});
   
