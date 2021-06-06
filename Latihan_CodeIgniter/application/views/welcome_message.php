<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Amel's Bio</title>

	<style type="text/css">
	
	body {
		margin-top:20px;
		color: #000;
		text-align: left;
		background-color: #e2e8ff;    
	}

	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		max-width: 300px;
		margin: auto;
		text-align: center;
		font-family: arial;
		background-color:#ffffff;
	}
	.title {
		color: #000000;
		font-size: 18px;
	}
	button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #7FCDCD;
		text-align: center;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
		color: white;
	}
	a {
		text-decoration: none;
		font-size: 22px;
		color: black;
	}
	button:hover, a:hover {
		opacity: 0.7;
	}
	</style>
</head>

<body>
	<h2 style="text-align:center; font-family:Arial;">User Profile Card - Tugas PBKK C</h2>
	<div class="card">
		<img src="/Fotoprofil.jpg" alt="Amelia" style="width:100%">
		<h1>Amelia Puji</h1>
		<p class="title">Student at Informatics ITS</p>
		<p>Institut Teknologi Sepuluh Nopember Surabaya</p>
		<div style="margin: 24px 0;">
			<a href="https://www.instagram.com/amlpm/"><i class="fa fa-instagram"></i></a> 
			<a href="#"><i class="fa fa-twitter"></i></a>  
			<a href="https://www.facebook.com/amlpm14"><i class="fa fa-linkedin"></i></a>  
			<a href="https://www.facebook.com/amlpm14"><i class="fa fa-facebook"></i></a> 
		</div>
		<p><a href="profile"><button>Let's Find Out More!<a></button></p>
	</div>
</body>
</html>