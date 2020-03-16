<?php
$connect = mysqli_connect("sftp.sd3.gpaas.net", "2176253", "terminus1121", "avotregout"); // marche pas 
$request = "SELECT * FROM utilisateurs";
$query = mysqli_query($connect, $request);
$result = mysqli_fetch_all($query);
var_dump($result);
