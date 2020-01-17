<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <title>Add Department</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('lib/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('lib/font-awesome/css/font-awesome.css'); ?> ">

    <script src="<?php echo base_url('lib/jquery-1.11.1.min.js'); ?> " type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/theme.css'); ?> "/>
</head>
<body class=" theme-blue">

   <!--Header Section-->
    <?php if(isset($header)) {echo $header;}  ?>
    
   <!--Side bar Section-->
       <?php if(isset($sidebar)) {echo $sidebar;}  ?>

   <!--Content--> 
    <?php if(isset($departmentadd)) {echo $departmentadd;}  ?>
   <!--Footer-->
       <?php if(isset($footer)) {echo $footer;}  ?>
	
<script src="<?php echo base_url('lib/bootstrap/js/bootstrap.js'); ?>"></script>
</body>
</html>


