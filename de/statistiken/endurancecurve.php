<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/endurancecurve.php";
	$aktuelleSeiteEN = "statistics/endurancecurve.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "endurancecurve";
	$piste = "EnduranceCurve";
	$pisteQuery = "EnduranceCurve";
	$title = $lang['title_endurancecurve'];
	$description = $lang['desc_endurancecurve'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>