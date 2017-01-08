<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/hardlyfastly.php";
	$aktuelleSeiteEN = "statistics/hardlyfastly.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "hardlyfastly";
	$piste = "HardlyFastly";
	$pisteQuery = "HardlyFastly";
	$title = $lang['title_hardlyfastly'];
	$description = $lang['desc_hardlyfastly'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>