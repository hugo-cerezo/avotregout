<?php
include('class.php');
session_start();
$id = $_POST["id"];
$tri = $_POST['tri'];
$sql = "DELETE FROM articles" . $tri . " WHERE id = $id";
$_SESSION["user"]->connectBdd()->query($sql);
