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
	<link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/normalize.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/transitions.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/flags.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/prettyPhoto.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/scrollbar.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/chartist.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/main.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/color.css">
	<link rel="stylesheet" href="{{ asset('/') }}front/css/responsive.css">
	<script src="{{ asset('/') }}front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	{{--Book Viewer--}}

	<link rel="stylesheet" href="{{ asset('/') }}front/product-view/css/etalage.css">
	<script src="{{ asset('/') }}front/product-view/js/jquery-1.11.1.min.js"></script>
	<script src="{{ asset('/') }}front/product-view/js/jquery.etalage.min.js"></script>
	<script>
        jQuery(document).ready(function ($) {

            $('#etalage').etalage({
                thumb_image_width: 333,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
            });

        });
	</script>
	{{--End Book Viewer--}}

</head>
<body class="tg-home tg-homeone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
    
	<!--************************************
			Wrapper Start
	*************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">

<!--				Header Start-->
		@include('front.include.header.header')
        
        
	   @yield('body')
    
    
<!--				Footer Start-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
            
            @include('front.include.footer.newsletter')
			
			<div class="clearfix"></div>
			
            @include('front.include.footer.big-footer')
            
		</footer>

    
	<!--************************************
			Wrapper End
	*************************************-->
    
	<!--************************************
			Theme Modal Box Start
	*************************************-->
	@include('front.include.modal')
	<!--************************************
			Theme Modal Box End
	*************************************-->
	<script src="{{ asset('/') }}front/js/vendor/jquery-library.js"></script>
	<script src="{{ asset('/') }}front/js/vendor/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="{{ asset('/') }}front/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
	<script src="{{ asset('/') }}front/JS/responsivethumbnailgallery.js"></script>
	<script src="{{ asset('/') }}front/js/jquery.flagstrap.min.js"></script>
	<script src="{{ asset('/') }}front/js/backgroundstretch.js"></script>
	<script src="{{ asset('/') }}front/js/owl.carousel.min.js"></script>
	<script src="{{ asset('/') }}front/js/jquery.vide.min.js"></script>
	<script src="{{ asset('/') }}front/js/jquery.collapse.js"></script>
	<script src="{{ asset('/') }}front/js/scrollbar.min.js"></script>
	<script src="{{ asset('/') }}front/JS/chartist.min.js"></script>
	<script src="{{ asset('/') }}front/js/prettyPhoto.js"></script>
	<script src="{{ asset('/') }}front/js/jquery-ui.js"></script>
	<script src="{{ asset('/') }}front/js/countTo.js"></script>
	<script src="{{ asset('/') }}front/js/appear.js"></script>
	<script src="{{ asset('/') }}front/js/gmap3.js"></script>
	<script src="{{ asset('/') }}front/js/main.js"></script>
</body>
</html>