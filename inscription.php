<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php

session_start();
include("class.php");
$_SESSION["user"] = new User;
if (isset($_POST["envoie"])) {
    $_SESSION["user"]->getRegistered();
}
?>
<form class="form" name="inscription" method="post" action="">
    <div class="form-group">
        <label for="login">Votre mail :</label></br>
        <input class="input border border-warning" type="text" name="login" />
    </div>
    <div class="form-group">
        <label for="email">email :</label></br>
        <input class="input border border-warning" type="mail" name="email" />
    </div>
    <div class="form-group">
        <label for="address">Votre adresse :</label></br>
        <input class="input border border-warning" type="text" name="address" />
    </div>
    <div class="form-group">
        <label for="phone">Votre numero de telephonne :</label></br>
        <input class="input border border-warning" type="tel" name="phone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" />
    </div>
    <div class="form-group">
        <label for="mdp">Votre mot de passe :</label></br>
        <input class="input border border-warning" type="password" name="mdp" />
    </div>
    <div class="form-group">
        <label for="remtp">Confirmez votre mot de passe :</label></br>
        <input class="input border border-warning" type="password" name="remdp" />
    </div>
    <input class="button1 border border-warning" type="submit" name="envoie" value="inscription" />
</form>