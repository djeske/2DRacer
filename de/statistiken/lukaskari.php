<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/lukaskari.php";
	$aktuelleSeiteEN = "statistics/lukaskari.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "lukaskari";
	$piste = "Lukaskari";
	$pisteQuery = "Lukaskari";
	$title = $lang['title_lukaskari'];
	$description = $lang['desc_lukaskari'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>