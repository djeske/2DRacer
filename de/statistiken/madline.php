<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/madline.php";
	$aktuelleSeiteEN = "statistics/madline.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "madline";
	$piste = "Madline";
	$pisteQuery = "Madline";
	$title = $lang['title_madline'];
	$description = $lang['desc_madline'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>