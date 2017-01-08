<?php
	$language = "de";
	$aktuelleSeiteDE = "de/impressionen.php";
	$aktuelleSeiteEN = "impressions.php";
	include '../includes/config.php';
	$currentPage = 'impressionen';
	$title = $lang['title_impressionen'];
	$description = $lang['desc_impressionen'];
	include '../includes/structure-top.php';
	include '../includes/content-impressionen.php';
	include '../includes/structure-bottom.php';
?>