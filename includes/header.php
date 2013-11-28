<?php
include_once('classes/controller.php');
include_once('classes/model.php');
include_once('classes/view.php');
$controller = new Controller;
?>
<!DOCTYPE html>
<html>
<head>
	<title>CMS Paul</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<nav id="main_menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="post.php">Posts</a></li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</nav>