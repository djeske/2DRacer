<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/rollercoaster.php";
	$aktuelleSeiteEN = "statistics/rollercoaster.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "rollercoaster";
	$piste = "Rollercoaster";
	$pisteQuery = "Rollercoaster";
	$title = $lang['title_rollercoaster'];
	$description = $lang['desc_rollercoaster'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>