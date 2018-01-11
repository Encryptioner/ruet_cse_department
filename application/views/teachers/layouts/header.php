<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo base_url(); ?>teachers_asset/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>teachers_asset/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>teachers_asset/css/normalize.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>teachers_asset/css/main.css">
      <script src="<?php echo base_url(); ?>teachers_asset/js/vendor/modernizr-2.8.3.min.js"></script>
      <style>
         ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color: #333;
         }
         li {
         float: left;
         }
         li a {
         display: block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-family:Verdana;
         }
         li a:hover {
         background-color: #111;
         }
         table {
             font-family: arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
         }

         td, th {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 8px;
         }

         tr:nth-child(even) {
             background-color: #dddddd;
         }
      </style>
   </head>
   <body style="background:#FFFFFF;">

      <section>
         <ul>
            <li><a class="active" href="<?php echo site_url(); ?>">HOME</a></li>
            <li><a class="active" href="<?php echo site_url('teachers/professors'); ?>">Professor</a></li>
            <li><a href="<?php echo site_url('teachers/assc_prof'); ?>">Associate Professor</a></li>
            <li><a href="<?php echo site_url('teachers/asst_prof'); ?>">Assistant Professor</a></li>
            <li><a href="<?php echo site_url('teachers/lecturers'); ?>">Lecturer</a></li>
         </ul>
      </section>
   <br>