<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/danman.php";
	$aktuelleSeiteEN = "statistics/danman.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "danman";
	$piste = "DanMan";
	$pisteQuery = "DanMan";
	$title = $lang['title_danman'];
	$description = $lang['desc_danman'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>