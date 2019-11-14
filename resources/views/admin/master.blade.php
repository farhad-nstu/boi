<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/normalize.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/transitions.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/flags.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/prettyPhoto.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/scrollbar.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/chartist.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/main.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/dashboard.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/color.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/responsive.css">
	<link rel="stylesheet" href="{{ asset('/') }}admin/css/dbresponsive.css">

	<!-- JQuery DataTable Css -->
	<link href="{{ asset('/') }}mt/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

     <!-- Custom Theme Style -->
    <link href="{{ asset('/') }}admin/build/css/custom.css" rel="stylesheet">
    
	<script src="{{ asset('/') }}admin/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	{{--Datatable Excel Style--}}
	<style>
		.dt-buttons {
			margin-top: 15px;
			float: left;
		}
		.dt-buttons a {
			background-color: green;
			padding: 5px;
			margin-right: 10px;
			color: white;
		}.dt-buttons .buttons-copy {
			 display: none;
		 }.dt-buttons .buttons-csv {
			  display: none;
		  }.dt-buttons .buttons-pdf {
			   display: none;
		   }.dt-buttons .buttons-print {
				display: none;
			}
		.dataTables_filter {
			float: right;
			width: 28%;
			margin-top: -0px;
		}
	</style>

</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

<!--				Header Start-->
        
        @include('admin.include.header.header')
        
		@yield('body')
        
<!--				Footer Start-->
        
        @include('admin.include.footer.footer')
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{ asset('/') }}admin/js/vendor/jquery-library.js"></script>
	<script src="{{ asset('/') }}admin/js/vendor/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="{{ asset('/') }}admin/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
	<script src="{{ asset('/') }}admin/JS/responsivethumbnailgallery.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery.flagstrap.min.js"></script>
	<script src="{{ asset('/') }}admin/js/backgroundstretch.js"></script>
	<script src="{{ asset('/') }}admin/js/owl.carousel.min.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery.vide.min.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery.collapse.js"></script>
	<script src="{{ asset('/') }}admin/js/scrollbar.min.js"></script>
	<script src="{{ asset('/') }}admin/JS/chartist.min.js"></script>
	<script src="{{ asset('/') }}admin/js/prettyPhoto.js"></script>
	<script src="{{ asset('/') }}admin/js/jquery-ui.js"></script>
	<script src="{{ asset('/') }}admin/js/countTo.js"></script>
	<script src="{{ asset('/') }}admin/js/appear.js"></script>
	<script src="{{ asset('/') }}admin/js/gmap3.js"></script>
	<script src="{{ asset('/') }}admin/js/main.js"></script>
    
     <!-- Custom Theme Scripts -->
    <script src="{{ asset('/') }}admin/build/js/custom.js"></script>
    
    <!--   Custom Tags Gentella-->
    <script src="{{ asset('/') }}admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="{{ asset('/') }}mt/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script src="{{ asset('/') }}mt/js/pages/tables/jquery-datatable.js"></script>
	
</body>
</html>