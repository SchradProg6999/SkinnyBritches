<!--
To make this code work, ensure that you have the scripts at the end the file
you are working on. We will make it an include file at some point but for now
if you want to get the bootstrap working you need them in your file. You can find them
in the bottom of the landing-page.php file for reference. This file also includes
all of the links that are needed (for now) to access the information you need if you
are using fonts/css/bootstrap in your file. Be aware, this file does contain an
opening body tag but not closing tags for the body or html. All this file adds
visually is the global nav.
 -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="_NqbwLI6zMyYf0wBtA7xtsXXRfu1L0L2aynm3PG41QE" />

	<link rel="apple-touch-icon" sizes="57x57" href="<?=URL_IMG?>/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=URL_IMG?>/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=URL_IMG?>/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=URL_IMG?>/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=URL_IMG?>/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=URL_IMG?>/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=URL_IMG?>/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=URL_IMG?>/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=URL_IMG?>/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=URL_IMG?>/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=URL_IMG?>/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=URL_IMG?>/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=URL_IMG?>/fav/favicon-16x16.png">
	<link rel="manifest" href="<?=URL_IMG?>/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=URL_IMG?>/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <title>Editor's Choice | <?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= URL_CSS ?>bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?= URL_CSS ?>main.css" rel="stylesheet">
	
	<!-- Javascript for the side navigation -->
	<script src="http://serenity.ist.rit.edu/~bxc8214/240/test/SkinnyBritchesWebProject/assets/js/test.js"></script>


    <?php
        if($title == "Home"){
            require_once "landing-css.inc.php";
        }
    ?>

    <!-- Font Links -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  </head>

  <body>
