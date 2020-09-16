<?php
include('class.php');
session_start();
$tri = $_POST['tri'];
$table = 'articles' . $tri;
if (isset($_POST["content"])) { //dataarray
    $id = $_POST["content"][0];
    $title = $_POST["content"][1];
    $text = $_POST["content"][2];
    $sql = "UPDATE $table SET `title`='$title',`text`='$text' WHERE id = $id";
    $_SESSION["user"]->connectBdd()->query($sql);
} else if (isset($_POST["orderUp"])) {
    $cat = $_POST["orderUp"][0][2];
    // object -1
    $id = $_POST["orderUp"][0][0];
    $order = $_POST["orderUp"][0][1];

    $id2 = $_POST["orderUp"][1][0];
    $order2 = $_POST["orderUp"][1][1];

    // 
    $sql = "UPDATE $table SET `page_order`=$order2  WHERE id= $id AND cat='$cat'";
    $sql2 = "UPDATE $table SET `page_order`=$order  WHERE id= $id2 AND cat='$cat'";
    $_SESSION["user"]->connectBdd()->query($sql);
    $_SESSION["user"]->connectBdd()->query($sql2);
    // 
} else if (isset($_POST["orderDown"])) {
    $cat = $_POST["orderDown"][0][2];
    // object +1
    $id = $_POST["orderDown"][0][0];
    $order = $_POST["orderDown"][0][1];

    $id2 = $_POST["orderDown"][1][0];
    $order2 = $_POST["orderDown"][1][1];

    // 
    $sql = "UPDATE $table SET `page_order`=$order2  WHERE id= $id AND cat='$cat'";
    $sql2 = "UPDATE $table SET `page_order`=$order  WHERE id= $id2 AND cat='$cat'";
    var_dump($sql, $sql2);
    $_SESSION["user"]->connectBdd()->query($sql);
    $_SESSION["user"]->connectBdd()->query($sql2);
    // 
}
