	<nav class="share">
		<div id="share-engage"> <span class="icon icon-share"> </span> SHARE  </div>
		
		<ul id="share-buttons" class="clearfix">
			<li class="one-third-first"> 				
				<div class="facebook btn btn-success" id="shareBtn">
  					 <span class="icon icon-facebook"> </span> Facebook
  				</div>
				<!--Facebook Share URL -->
				 <script>
				 var currentLocation = window.location.href
				 document.getElementById('shareBtn').onclick = function() {
				  	   FB.ui({
				  	     display: 'page',
				  	     method: 'share',
				  	     href:currentLocation,
				  	   }, function(response){});
				  	 }
				 </script>
			</li>		
			<li class="one-third-second"> 
				<a href="https://twitter.com/share?&via=TribecaFilmIns&hashtags=TFISandbox&text=TFI%20Sandbox" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
				<div class="twitter"> 										
						<span class="icon icon-twitter"> Tweet 
				</div>
				</a>	
			</li>
			<li class="one-third-third"> 				
				<?
				echo 
				'<a href="https://plus.google.com/share?url='.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI].'"target="_blank">
				<div class="google"> 
						<span class="icon icon-google"> </span> Google
				</div></a>
				';
				?>					
			</li>
		</ul>		
	</nav>

