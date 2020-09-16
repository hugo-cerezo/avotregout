<?php
session_start();
include('class.php');
$_SESSION['user'] = new user;
$result = $_SESSION['user']->getNews();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169617593-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-169617593-2', {
            'page_path': '/index.html'
        });
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>A Vôtre Goût</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<style>
    .card {
        border: 3px red;
        border-style: dashed;
    }

    .shrimp {
        height: 4rem;
        position: relative;
        top: -1rem;
    }
</style>

<body>
    <button id="accueil" class="btn btn-light">Accueil</button>
    <button id="contact" class="navLink btn btn-light">Contact</button>

    <main id="main" class="container-lg" style="min-height: 65vh;">
        <section class="d-flex flex-column flex-sm-column flex-xs-column flex-lg-row p-3">
            <div class="col-lg-3 col-sm-12 col-xs-12 col-12 mb-4 landing" style="cursor:pointer;" id="parti">
                <div class="card h-100">
                    <img src="src/img/parti.jpg" class="card-img-top" alt="particulier">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title">Particulier</h5>
                            <img class="shrimp" src="src/svg/shrimp.svg" alt="shrimp">
                        </div>
                        <p class="card-text">Retrouvez nos prestations réservées aux particuliers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-xs-12 col-12 mb-4 landing" style="cursor:pointer;" id="pro">
                <div class="card h-100">
                    <img src="src/img/pro.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title">Professionnel</h5>
                            <img class="shrimp" src="src/svg/shrimp.svg" alt="shrimp">
                        </div>
                        <p class="card-text">Retrouvez nos prestations réservées aux entreprises.</p>
                    </div>
                </div>
            </div>
            <div id="evenements" class="col-lg-3 col-sm-12 col-xs-12 col-12 mb-4 navLink" style="cursor:pointer;">
                <div class="card h-100">
                    <img src="src/img/event.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title">Créateur d'évenements</h5>
                            <img class="shrimp" src="src/svg/shrimp.svg" alt="shrimp">
                        </div>
                        <p class="card-text">Retrouvez nos prestations réservées à la restauration évènementielle.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-xs-12 col-12 mb-4">
                <div class="card h-100">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Actualitées</h5>
                        <div class="col">
                            <h6>News Facebook</h6>
                            <p class="card-text">Retrouvez nos actualitées Facebook.</p>
                            <?php include('news.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex flex-column flex-sm-column flex-xs-column flex-lg-row p-3">
            <div class="col-12 mb-4">
                <div class="card h-100">
                    <img src="src/img/galerie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Galerie</h5>
                        <p class="card-text">Retrouvez nos précédents réalisations en images.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex flex-column flex-sm-column flex-xs-column flex-lg-row p-3">
            <div class="col mb-4">
                <div class="card h-100">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Devis</h5>
                        <p class="card-text">Faite votre demande de devis en ligne.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <div id="map" class="my-5"></div>
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Here you can use rows and columns to organize your footer content.</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
            </div>
            <!-- Footer Links -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
    </footer>
    <script src="function.js"></script>
    <script src="script.js"></script>
</body>

</html>