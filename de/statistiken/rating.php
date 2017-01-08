<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/rating.php";
	$aktuelleSeiteEN = "statistics/rating.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "rating";
	$title = $lang['title_rating'];
	$description = $lang['desc_rating'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rating.php';
	include '../../includes/structure-bottom.php';
?>