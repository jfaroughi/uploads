<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Mini Ajax File Upload Form</title>

		<!-- Google web fonts -->

		<!-- The main CSS file -->
		<link href="<?php echo $assets ?>css/style.css" rel="stylesheet" />
	</head>

	<body>

		<form id="upload" method="post" action="<?php echo base_url('index.php/uploads') ?>/do_upload" enctype="multipart/form-data">
			<div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		</form>

        
		<!-- JavaScript Includes -->
		<script src="<?php echo $assets ?>js/jquery.min.js"></script>
		<script src="<?php echo $assets ?>js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo $assets ?>js/jquery.ui.widget.js"></script>
		<script src="<?php echo $assets ?>js/jquery.iframe-transport.js"></script>
		<script src="<?php echo $assets ?>js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="<?php echo $assets ?>js/script.js"></script>


		<!-- Only used for the demos. Please ignore and remove. --> 

	</body>
</html>

