<?php
include('class.php');
session_start();
$cat = $_GET["cat"];
$sth = $_SESSION["user"]->connectBdd()->prepare('SELECT * FROM `articles` WHERE cat = ? ORDER BY ?');
$sth->execute(array($cat, 'page_order'));
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

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
if ($_SESSION["user"]->getRank() == 'admin') {
    echo '<button id="addArticle" class="btn btn-light">Ajouter un article</button>';
}
if ($cat == 'contact') {
    include('contact.php');
}
