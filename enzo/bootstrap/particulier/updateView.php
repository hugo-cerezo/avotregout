<?php
include('class.php');
session_start();
if (isset($_POST["content"])) {
    $id = $_POST["content"][0];
    $title = $_POST["content"][1];
    $text = $_POST["content"][2];
    $sql = "UPDATE `articles` SET `title`='$title',`text`='$text' WHERE id = $id";
    $_SESSION["user"]->connectBdd()->query($sql);
} else if (isset($_POST["orderUp"])) {
    $cat = $_POST["orderUp"][0][2];
    // object -1
    $id = $_POST["orderUp"][0][0];
    $order = $_POST["orderUp"][0][1];

    $id2 = $_POST["orderUp"][1][0];
    $order2 = $_POST["orderUp"][1][1];

    // 
    $sql = "UPDATE `articles` SET `page_order`=$order2  WHERE id= $id AND cat='$cat'";
    $sql2 = "UPDATE `articles` SET `page_order`=$order  WHERE id= $id2 AND cat='$cat'";
    $_SESSION["user"]->connectBdd()->query($sql);
    $_SESSION["user"]->connectBdd()->query($sql2);
    // 
} else if (isset($_POST["orderDown"])) {
    $cat = $_POST["orderUp"][0][2];
    // object +1
    $id = $_POST["orderUp"][0][0];
    $order = $_POST["orderUp"][0][1];

    $id2 = $_POST["orderUp"][1][0];
    $order2 = $_POST["orderUp"][1][1];

    // 
    $sql = "UPDATE `articles` SET `page_order`=$order2  WHERE id= $id AND cat='$cat'";
    $sql2 = "UPDATE `articles` SET `page_order`=$order  WHERE id= $id2 AND cat='$cat'";
    $_SESSION["user"]->connectBdd()->query($sql);
    $_SESSION["user"]->connectBdd()->query($sql2);
    // 
}
