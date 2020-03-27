<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title ?>
	</title>
	<link href='<?php echo base_url("assets/upload/images/$favicon"); ?>' rel='shortcut icon' type='image/x-icon' />


	<!-- css -->
	<?php require_once('_css.php') ;?>
	<!-- jQuery 2.2.3 -->
	<script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.min.js"></script>

	<!-- meta -->
	<?php require_once('_meta_artikel.php') ;?>
	<meta property="og:image" content='<?php 
	if(!empty($gambar))
		echo base_url("assets/upload/foto_artikel/$gambar");
	else 
		echo base_url("assets/upload/images/$favicon");  
	?>' >
</head>

<body>
		<!-- header -->
		<?php require_once('_header.php') ;?>
		<!-- sidebar -->
		<!-- content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content">
				<?php echo $contents ;?>
			</section>
		</div>
		<!-- footer -->
		<?php require_once('_footer.php') ;?>

	<!-- js -->
	<?php require_once('_js.php') ;?>
</body>

</html>
