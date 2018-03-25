<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<?php $this->load->view('partials/header'); ?>
	</head>
	<body class="stretched">
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
		  		var js, fjs = d.getElementsByTagName(s)[0];
		  		if (d.getElementById(id)) return;
		  		js = d.createElement(s); js.id = id;
		  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=10150103731785500";
		  		fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));
		</script>
    	<div id="wrapper" class="clearfix">
			<?php echo $content;?>
		</div>
	    <?php $this->load->view('partials/footers'); ?>
	    <?php $this->load->view('partials/footer'); ?>
	</body>
</html>