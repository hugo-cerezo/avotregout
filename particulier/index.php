<?php
session_start();
include('class.php');
$_SESSION['user'] = new user;
// var_dump($_SESSION['user']->getUserData());
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Apéros clé en main</title>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <button id="accueil">Accueil</button>
        <button id="apero" class="navLink">Apero</button>
        <button id="brunchs" class="navLink">Brunchs</button>
        <button id="buffets" class="navLink">Buffets</button>
    </nav>

    <main id="main" class="container">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui non sint beatae similique natus deleniti deserunt, quos debitis eaque cumque, explicabo magni necessitatibus nihil reprehenderit voluptas illum provident quae blanditiis.
    </main>
    <script src="script.js"></script>
</body>

</html>