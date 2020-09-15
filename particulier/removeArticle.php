<?php
include('class.php');
session_start();
$id = $_POST["id"];
$sql = "DELETE FROM articles WHERE id = $id";
echo $sql;
$_SESSION["user"]->connectBdd()->query($sql);
