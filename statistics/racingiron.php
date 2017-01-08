<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/racingiron.php";
	$aktuelleSeiteEN = "statistics/racingiron.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "racingiron";
	$piste = "Racing Iron";
	$pisteQuery = "Racing Iron";
	$title = $lang['title_racingiron'];
	$description = $lang['desc_racingiron'];	
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>