<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php
session_start();
include("class.php");
$_SESSION["user"] = new User;
if (isset($_POST["envoie"]) &&  !empty($_POST["mail"]) && !empty($_POST["mdp"])) {
    $_SESSION["user"]->getConnected();
}

if ($_SESSION["user"]->isConnected() == true) {
    header("location:index.php");
    /* if(!isset($_COOKIE["'.$result['id'].'")) */
}


?>
<form class="d-flex flex-column col-3 " action="" method="post">
    <div class="form-group">
        <label for="login">Votre mail :</label></br>
        <input class="input border border-warning" type="mail" name="mail" />
    </div>
    <div class="form-group">
        <label for="mdp">Votre mot de passe :</label></br>
        <input class="input border border-warning" type="password" name="mdp" />
    </div>
    <input class="button1 col-4 border border-warning" type="submit" value="Se connecter" name="envoie" />
    <p>pas encore de compte ?<a href='inscription.php'>inscrivez vous</a></p>
</form>