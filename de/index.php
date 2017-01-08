<?php
	$language = "de";
	$aktuelleSeiteDE = "de/";
	$aktuelleSeiteEN = "";
	include '../includes/config.php';
	$currentPage = "index";
	$title = $lang['title_index'];
	$description = $lang['desc_index'];
	include '../includes/structure-top.php';
	include '../includes/content-index.php';
	include '../includes/structure-bottom.php';
?>