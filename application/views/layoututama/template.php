<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title ?>
	</title>
	<link href='<?php echo base_url("assets/upload/images/$favicon"); ?>' rel='shortcut icon' type='image/x-icon' />
	<!-- meta -->
	<?php require_once('_meta.php') ;?>

	<!-- css -->
	<?php require_once('_css.php') ;?>
	<!-- jQuery 2.2.3 -->
	<script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
	<meta property="og:image" content='<?php echo base_url("assets/upload/images/$favicon"); ?>' >
</head>

<body>
		<!-- header -->
		<?php require_once('_header.php') ;?>
		<!-- content -->
		<main id="main">
				<?php echo $contents ;?>
		</main>
		<!-- footer -->
		<?php require_once('_footer.php') ;?>

	<!-- js -->
	<?php require_once('_js.php') ;?>
</body>

</html>
