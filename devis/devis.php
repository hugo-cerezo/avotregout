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
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),)' ;
            $query =mysqli_query($conn, $createTable);
            $requestvalues = 'INSERT INTO Devis_"'.$_SESSION['login'].'" VALUES () ';
            $_SESSION['pannier']= true ;
        }
    }
}
else 
{
    echo '<p id="erreurconnexion">veuillez vous connectez</p>';
}
?>