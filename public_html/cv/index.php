<?php
$phone = '';
if( isSet($_GET['phone']) ){
	$phone = trim( htmlentities($_GET['phone']) );
}

$templateConfig["title"] = "CV";
$templateConfig["content"] = '/cv/cv.inc.php';
include( $_SERVER['DOCUMENT_ROOT'] . '/template/main.inc.php' );
