<!-- //  php share function for facebook-->

				<?
				
				echo 
				'<a href="https://www.facebook.com/dialog/share?app_id=167329723445244&display=popup&href=https%3A%2F%2F'.urlencode($_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]).'&redirect_uri=https%3A%2F%2F'.urlencode($_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]).'">
				<div class="facebook btn btn-success" id="shareBtn">
  					 <span class="icon icon-facebook"> </span> Facebook
  				</div>
				';
				?>