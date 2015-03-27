<?php

function do_header($title, $body_class){

?>

  <!doctype html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Shane Donnelly : <?= $title ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width"> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/warped_text.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="<?= $body_class ?>">


<?php 

} //end do_header()

?>
