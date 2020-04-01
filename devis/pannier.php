<button id=validationdevis>valide</button>
<button id=supressiondevis>vidé le devis</button>
<?php
session_start();
if ($_SESSION['pannier']!= false)
{
    $conn = mysqli_connect("localhost","root","",'avotregout');
    $requestlog="SELECT * FROM `utilisateurs` WHERE login='.$_SESSION[login].'";//recupere toute les données utilisateurs
    $requestdevis="SELECT * FROM `Devis_Id_Utilisateurs_date`";//recupere la table créé pour le devis qui as pour nom Devis_Id de l'utilisateur
    $query = mysqli_query($conn, $requestlog);
    $query2 = mysqli_query($conn, $requestdevis);
    if($_POSTvalidationdevis)//pop-up etes vous sur ?
    {
        $_SESSION['values'];//resultat formulaire du devis 
        $query2;//table sql du devis avec tout les element et les qtt
        //faire les formules de calcul du devis (fourchette de prix)
        //faire l'affichage du devis
        //envoie a l'admin du devis
        //enregistrement du fichier txt? devis_$utilisateurs sur le serveurs dans un dossier devis/utilisateurs/devis_$utilisateurs
        //drop table devis_utilisateurs
        //session destroy pannier
        //session destroy values

    }
    if($_POST['supressiondevis'])//pop-up etes vous sur ?
    {
        //drop table devis_utilisateurs
        //session destroy pannier
        //session destroy values
    }
}
else
{
    echo '<p id="erreurpannier">votre pannier est vide</p>';
}

?>