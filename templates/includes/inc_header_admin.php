<!DOCTYPE html>
<html lang="es">
<head>
  <base href="">
  <meta charset="UTF-8">

  <title><?php echo isset($d->title) ? $d->title .' - '.get_sitename() : 'Bienvenido - '.get_sitename()  ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo PLUGINS .'fontawesome-free/css/all.min.css' ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo CSS.'adminlte.min.css' ?>">
</head>

<body class="hold-transition sidebar-mini">
<!-- ends inc_header.php -->