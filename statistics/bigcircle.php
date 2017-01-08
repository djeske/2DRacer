<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/bigcircle.php";
	$aktuelleSeiteEN = "statistics/bigcircle.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "bigcircle";
	$piste = "Big Circle";
	$pisteQuery = "Big Circle";
	$title = $lang['title_bigcircle'];
	$description = $lang['desc_bigcircle'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>