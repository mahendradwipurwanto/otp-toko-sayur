<!DOCTYPE html>
<html lang="en" dir="">

<head>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- Meta Website -->
	<meta name="description" content="<?= $web_desc; ?>">
	<meta property="og:title" content="<?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "") . $web_title) : $web_title); ?>">
	<meta property="og:description" content="<?= $web_desc; ?>">
	<meta property="og:image" content="<?= base_url(); ?>assets/images/<?= $web_icon?>">
	<meta property="og:url" content="<?= base_url(uri_string()) ?>">
    
    <title><?= ($this->uri->segment(1) ? ucwords(str_replace('-', ' ', $this->uri->segment(1)) . ' ' . ($this->uri->segment(2) ? str_replace('-', ' ', $this->uri->segment(2)) : "") . " - ".$web_title) : $web_title); ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/<?= $web_icon;?>">

    <!-- stylesheet -->

	<link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url();?>assets/css/custom.css">

    <!-- javascript -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/modernizr.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/waves.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.nicescroll.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

	<!-- KNOB JS -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugins/jquery-knob/excanvas.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugins/jquery-knob/jquery.knob.js"></script> 

	<!-- App js -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/app.js"></script>
	<!-- sweetalert2 -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/sweetalert2/sweetalert2.min.js"></script>
	<!-- tinyMCE -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/tinymce/jquery.tinymce.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/tinymce-textarea.js"></script>
	<!-- ckeditor -->
	<script type="text/javascript" type="text/javascript" src="<?= base_url(); ?>assets/plugin/ckeditor/ckeditor.js"></script>
</head>
<body>
	<!-- Loader -->
	<div id="preloader"><div id="status"><div class="spinner"></div></div></div>