<?php
$conn = mysqli_connect("localhost","root","",'avotregout');
$request="SELECT * FROM `articles` WHERE categorie='Pro'";
$query =mysqli_query($conn, $request);
$row = mysqli_fetch_all($query);
echo $row[0][3];
?>