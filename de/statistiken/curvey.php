<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/curvey.php";
	$aktuelleSeiteEN = "statistics/curvey.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "curvey";
	$piste = "Curvey";
	$pisteQuery = "Curvey";
	$title = $lang['title_curvey'];
	$description = $lang['desc_curvey'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>