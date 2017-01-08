<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/softy.php";
	$aktuelleSeiteEN = "statistics/softy.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "softy";
	$piste = "Softy";
	$pisteQuery = "Softy";
	$title = $lang['title_softy'];
	$description = $lang['desc_softy'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>