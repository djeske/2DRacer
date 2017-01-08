<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/traprise.php";
	$aktuelleSeiteEN = "statistics/traprise.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "traprise";
	$piste = "Traprise";
	$pisteQuery = "Traprise";
	$title = $lang['title_traprise'];
	$description = $lang['desc_traprise'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>