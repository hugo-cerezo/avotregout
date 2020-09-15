<?php
include("class.php");
session_start();
if(!isset($_SESSION['user']))
{
  $_SESSION['user']= new user;
}
?>
<link rel="stylesheet" href="../css/style.css">
<div id="menuArea">
  <input type="checkbox" id="menuToggle"></input>

<label for="menuToggle" class="menuOpen">
  <div class="open"></div>
</label>

<div class="menu menuEffects">
  <label for="menuToggle"></label>
  <div class="menuContent">
    <ul>
      <li><a id="HomePage" href="#">Accueil</a></li>
      <li><a id="" href="#">articles</a></li>
      <li><a id="HomeGalerie" href="#">galerie</a></li>
      <li><a id="" href="#">profil</a></li>
      <?php
      $connected = $_SESSION['user']->isConnected();
      if ($connected == false)
      {
        echo '<li><a id="connexion" href="#">connexion</a></li>';
      }else{
        echo '<li><a id="deconnexion" href="#">deconnexion</a></li>';
      }
      ?>
    </ul>
  </div>
</div>
</div>

