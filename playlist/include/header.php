<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src='https://kit.fontawesome.com/0a35679e5c.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="./css/style.css">
	<?php
	$arr=[];
	$conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
	$arrsql= "select * from arr";
	$arrResult=mysqli_query($conn,$arrsql);
	while($arrrow=mysqli_fetch_array($arrResult)){
	array_push($arr,$arrrow['arrname']);
	}
	?>
</head>
<body>

