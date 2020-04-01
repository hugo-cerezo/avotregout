<?php
session_start();
if (isset($_SESSION['login'])){
    //verifier si la table existe dans la BDD
    if ($table!= true)
    {
        include 'devisnav.php';
    }
    else
    {
        include 'formulairedevis.php';
        if (isset($_POST['validationdormulairedevis']))
        {
            $conn = mysqli_connect("localhost","root","",'avotregout');
            /* creation table pour devis */
            $createTable = 'CREATE TABLE Devis_"'.$_SESSION['login'].'" (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            categorie varchar(255) NOT NULL,
            produits varchar(255) NOT NULL,
            prix int(255) NOT NULL,
            qtt int(255) NOT NULL,

            )' ;
            //faire n condition pour boisson/service/materiel 18 conditoon au total
            $_SESSION['values']= $_POST['nombrepersonne']+$_POST['date']+$_POST['boisson']+$_POST['service']+$_POST['materiel'];
        }
    }
}
else 
{
    echo '<p id="erreurconnexion">veuillez vous connectez</p>';
}
?>