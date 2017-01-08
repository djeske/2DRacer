<?php
	$language = "de";
	$aktuelleSeiteDE = "de/statistiken/raceonglasses.php";
	$aktuelleSeiteEN = "statistics/raceonglasses.php";
	include '../../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "raceonglasses";
	$piste = "Race on Glasses";
	$pisteQuery = "Race on Glasses";
	$title = $lang['title_raceonglasses'];
	$description = $lang['desc_raceonglasses'];
	include '../../includes/structure-top.php';
	include '../../includes/content-rundenrekorde.php';
	include '../../includes/structure-bottom.php';
?>