<?php
include('class.php');
session_start();
$tri = $_POST["tri"];
$cat = $_POST["content"][0];
$title = $_POST["content"][1];
$text = $_POST["content"][2];
$sql = "SELECT * FROM articles" . $tri . " WHERE cat ='$cat'";
$result = $_SESSION["user"]->connectBdd()->query($sql)->fetchAll();
$checkCount = count($result);
$order = $checkCount + 1;
$newArticle = "INSERT INTO articles" . $tri . " (`title`, `text`, `cat`, `page_order`) VALUES ('$title','$text','$cat',$order)";
$_SESSION["user"]->connectBdd()->query($newArticle);
echo $newArticle;
