<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/twintway.php";
	$aktuelleSeiteEN = "statistics/twintway.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "twintway";
	$piste = "TwinTway";
	$pisteQuery = "TwinTway";
	$title = $lang['title_twintway'];
	$description = $lang['desc_twintway'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>