<?php
include("class.php");
session_start();
$i = 0;
$cookie = $_POST['data'];
$devisPreSql = $cookie;
var_dump($cookie);
$desc = $devisPreSql[0];
var_dump($desc); 
$arr = [];
foreach($desc as $data)
{
  $push = explode(':',$data);
  array_push($arr,$push);
}
var_dump($arr);
$data = "";
foreach($arr as $str)
{
  var_dump($str);
  foreach($str as $txt)
  {
    $data = $data.$txt.'/';
  }
  
}
var_dump($data);
$promo = "";
$adresse = $devisPreSql[1][1];
$nbconvive = $devisPreSql[1][2];
$datelivraison = $devisPreSql[1][3];
$id = $_SESSION['user']->getId();
$conn=$_SESSION['user']->connectBdd();
$query = $conn->prepare("INSERT INTO orders VALUES (NULL,$id,'',$nbconvive,'$data',NOW(),'$datelivraison','$adresse',0)"); //NOW() a pas l'air de fonctionner
$query->execute();

var_dump($query);
//faire la redirection vers la page d'acceuil