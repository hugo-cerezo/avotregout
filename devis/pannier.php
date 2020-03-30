<button id=validationdevis>valide</button>
<button id=supressiondevis>vié le devis</button>
<?php

$conn = mysqli_connect("localhost","root","",'avotregout');
$requestlog="SELECT * FROM `produits` WHERE login='.$_SESSION[login].'";//recupere toute les données utilisateurs
$requestdevis="SELECT * FROM `Devis_Id_Utilisateurs_date`";//recupere la table créé pour le devis qui as pour nom Devis_Id de l'utilisateur_date a laquel l'utilisateurs a cree la table
//404 SOLUTION NOT FUND
$query =mysqli_query($conn, $requestlog);


?>