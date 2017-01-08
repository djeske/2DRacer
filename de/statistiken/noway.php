<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/noway.php";
	$aktuelleSeiteEN = "statistics/noway.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "noway";
	$piste = "No Way";
	$pisteQuery = "No Way";
	$title = $lang['title_noway'];
	$description = $lang['desc_noway'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>