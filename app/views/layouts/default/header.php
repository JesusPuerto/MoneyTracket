<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
	  <title>Sistema de Gestión</title>
   
    <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>materialize.css" media="screen,projection" charset="utf-8">
     <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>style.css" media="screen,projection" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

 <ul id="dropdown11" class="dropdown-content" class="blue darken-3 lighten-2s">
    <li>Usuarios</li>
   <li><a href="<?php echo APP_URL; ?>users/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>users">Mostar</a></li>
 </ul>
 <ul id="dropdown22" class="dropdown-content">
 <li>Cuentas</li>
   <li><a href="<?php echo APP_URL; ?>accounts/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>accounts">Mostar</a></li>
 </ul>
 <ul id="dropdown33" class="dropdown-content">
  <li>Transacciones</li>
   <li><a href="<?php echo APP_URL; ?>transactions/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>transactions">Mostar</a></li>
 </ul>
 <ul id="dropdown44" class="dropdown-content">
 <li>Categorias</li>
   <li><a href="<?php echo APP_URL; ?>categories/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>categories">Mostar</a></li>
      <li class="col l2"><a href="<?php echo APP_URL; ?>users/logout">Cierra sesión</a></li>
 </ul>
