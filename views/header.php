<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>


	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postit</title>
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/Google-Style-Login.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/kniha.css" rel="stylesheet">
    <script src="<?php echo URL; ?>public/js/jquery.min.js"></script>




<script>  // TENTO SKRIPT NA DYNAMICKE NACITANIE STRANKY DO CONTAINERU
/*
$(document).ready(function(){

$("#janeviem").click(function(){
    $(".container").slideUp(function(){
      $(".container").load("<?php echo URL; ?>postit/prehladd",function(){
       $(".container").slideDown();
});
});
});
  });*/
</script>

</head>


	 <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo URL; ?>">Hlavná stránka</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                 <ul class="nav navbar-nav">

                  <li><a href="<?php echo URL; ?>postit/index">Prehlad</a></li>
                  <li><a href="<?php echo URL; ?>postit/pridaj">Pridaj</a></li>
                  <li><a href="<?php echo URL; ?>postit/eviduj">Eviduj</a></li>
                  <li><a href="<?php echo URL; ?>postit/postit">Postit</a></li>
                <!--  <li><a href="<?php echo URL; ?>postit/prehladd">Prehlad bez css</a></li>--> 
                </ul>   

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo URL; ?>login/index">Login</a></li> 
                  </ul>

            </div>
            </nav>
<body>
<div class="container">
	
	