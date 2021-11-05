<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reporte Riego</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">







 






</head>


<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#193c61">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
       

     
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="navbar-search-block">
         
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        
      </li>
      <!-- Notifications Dropdown Menu -->
      
        
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        
                        <li class="breadcrumb-item"><?php echo $this->session->userdata('nombreUsuario'); ?> </li>
                        
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $this->session->userdata('rol'); ?></li>
                    </ol>

                      
                        
                       
                        
                        <li class="breadcrumb-item active" aria-current="page">
                            
                              <?php 
                             echo form_open_multipart('usuarios/modificar');
                             ?>
                         <input type="hidden" name="idusuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                         <button type="submit " class="btn btn-primary mb-3">Modificar Usuario</button>
                         <?php 
                           echo form_close();

                          ?>
                        </li>
                    
                
                </nav>
      
      
       

    




    </ul>
    
  </nav>




