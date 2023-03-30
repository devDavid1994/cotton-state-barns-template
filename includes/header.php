<?php
	session_start();
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- title -->
<title><?= $title ?? 'Cotton State Barns' ?></title>
<meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
<meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
<meta name="author" content="">
<!-- favicon -->
<link rel="shortcut icon" type="image/favicon" href="/image/fevicon.png">
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<!-- simple-line icon -->
<link rel="stylesheet" type="text/css" href="/css/simple-line-icons.css">
<!-- font-awesome icon -->
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<!-- themify icon -->
<link rel="stylesheet" type="text/css" href="/css/themify-icons.css">
<!-- ion icon -->
<link rel="stylesheet" type="text/css" href="/css/ionicons.min.css">
<!-- owl slider -->
<link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
<!-- swiper -->
<link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
<!-- animation -->
<link rel="stylesheet" type="text/css" href="/css/animate.css">
<!-- style -->
<link rel="stylesheet" type="text/css" href="/css/style5.css">

<script>
	var dealerInfo = <?= !empty($_SESSION['dealer_info']) ? json_encode($_SESSION['dealer_info']) : 'null'; ?>;
</script>