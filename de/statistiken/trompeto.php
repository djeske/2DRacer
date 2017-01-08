<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/trompeto.php";
	$aktuelleSeiteEN = "statistics/trompeto.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "trompeto";
	$piste = "Trompeto";
	$pisteQuery = "Trompeto";
	$title = $lang['title_trompeto'];
	$description = $lang['desc_trompeto'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>