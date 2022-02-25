<?php if (!defined("IN_WALLET")) { die("Auth Error!"); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="">
  <meta name="author" content="">
  <title>
	<?=$fullname?>
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- <link href="assets/css/wallet.css" rel="stylesheet"> -->
  <link href="assets/css/languages.min.css" rel="stylesheet">
</head>    
<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="30">
    <div class="container">
	
      <div class="navbar-translate">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/" rel="tooltip" data-placement="bottom">Home</a>
				</li>
			</ul>
		
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
	  
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="https://explorer.btcadd.io/">Explorer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/bitcoinaddition/btca">Github</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" rel="tooltip" data-placement="left"><i class="fa fa-language"></i><p>Language</p></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		<a class="dropdown-item" href="index.php?lang=en"><span class="lang-sm lang-lbl" lang="en"></span></a>
		<a class="dropdown-item" href="index.php?lang=rus"><span class="lang-sm lang-lbl" lang="ru"></span></a>

</div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
