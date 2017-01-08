<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/dirtroad.php";
	$aktuelleSeiteEN = "statistics/dirtroad.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "dirtroad";
	$piste = "DirtRoad";
	$pisteQuery = "DirtRoad";
	$title = $lang['title_dirtroad'];
	$description = $lang['desc_dirtroad'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>