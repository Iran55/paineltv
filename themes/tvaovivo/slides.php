<!DOCTYPE html>
<html>
	<head>
		<style>
		html, body { 
			height: 100%;
			overflow: hidden;
			margin: 0;
		}
		
		.rslides {
			  position: relative;
			  list-style: none;
			  overflow: hidden;
			  width: 100%;
			  width: 100vw;
			  height: 100vh;
			  padding: 0;
			  margin: 0;
		}

		.rslides li {
			-webkit-backface-visibility: hidden;
			position: absolute;
			display: none;
			width: 100%;
			left: 0;
			top: 0;
		}

		.rslides li:first-child {
			position: relative;
			display: block;
			float: left;
		}

		.rslides img {
			display: block;
			height: auto;
			float: left;
			width: 100%;
			border: 0;
		}
		
		</style>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="responsiveslides.min.js"></script>
		<script>
			<!-- Opções disponíveis em http://responsiveslides.com/ -->
			$(function() {
				$(".rslides").responsiveSlides({
					timeout: 10000
				});
			});
		</script>
	</head>
	<body>
		<ul class="rslides">
			<?php 
			foreach (new DirectoryIterator('img/') as $file) {
				if($file->isDot()) continue;
				print '<li><img src=img/' . $file->getFilename() . '></li>';
			} 
			?>
		</ul>
	</body>
</html>