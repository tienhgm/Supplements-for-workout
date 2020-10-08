<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<link href="../Assets/Backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!-- Custom styles for this template-->
  	<link href="../Assets/Backend/css/sb-admin-2.min.css" rel="stylesheet">
  	<!-- Bootstrap core JavaScript-->
  	<script src="../Assets/Backend/vendor/jquery/jquery.min.js"></script>
  	<script src="../Assets/Backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
  	<script src="../Assets/Backend/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="../Assets/Backend/js/sb-admin-2.min.js"></script>
	sc

</head>
<body class="bg-gradient-primary">
<?php 
	//---
	$action = $action == "" ? "index":$action;
	//---
	//load file LoginController.php
	include "Controllers/LoginController.php";
	//khoi tao object
	$obj = new LoginController();
	//goi ham
	$obj->$action();
 ?>

</body>
</html>