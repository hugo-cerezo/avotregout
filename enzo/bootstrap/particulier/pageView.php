<?php
include('class.php');
session_start();
$conn = new PDO("mysql:host=localhost;dbname=avotregout;charset=utf8", "root", "");
$cat = $_GET["cat"];
$sql = "SELECT * FROM `articles` WHERE cat = '$cat' ORDER BY page_order";
$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $article) {
    if ($_SESSION['user']->getRank() == "admin") {
        if ($article["page_order"] == 1) {
            echo '<section value="' . $article["page_order"] . '" id=' . $article["id"] . ' class="my-5 d-flex flex-column justify-content-center">';
            echo '<button class="editLink col-1 mb-1 btn btn-light">Edit</button>';
            echo '<h4 class="my-5 text-center">' . nl2br($article['title']) . '</h4>';
            echo '<p class="text-center">' . nl2br($article['text']) . '</p>';
            echo '</section>';
        } else {
            echo '<section value ="' . $article["page_order"] . '" id=' . $article["id"] . ' class="my-5 d-flex flex-column justify-content-center">';
            echo '<button class="editLink col-1 mb-1 btn btn-light">Edit</button>';
            echo '<h5>' . nl2br($article['title']) . '</h5>';
            echo '<p>' . nl2br($article['text']) . '</p>';
            echo '</section>';
        }
    } else {
        if ($article["page_order"] == 1) {
            echo '<section id=' . $article["id"] . ' class="my-5 d-flex flex-column justify-content-center">';
            echo '<h4 class="my-5 text-center">' . nl2br($article['title']) . '</h4>';
            echo '<p class="text-center">' . nl2br($article['text']) . '</p>';
            echo '</section>';
        } else {
            echo '<section id=' . $article["id"] . ' class="my-5 d-flex flex-column justify-content-center">';
            echo '<h5>' . nl2br($article['title']) . '</h5>';
            echo '<p>' . nl2br($article['text']) . '</p>';
            echo '</section>';
        }
    }
}

if ($cat == 'contact') {
    include('contact.php');
}
