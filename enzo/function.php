<?php

function inscription($login,$password,$email)
{
    if (isset($_POST['inscription']))
    {
        $conn = mysqli_connect("localhost","root","","#");
        $requestins = 'INSERT INTO utilisateurs (`id`,`login`,`password`,`email`) VALUES (NULL,'".$_POST["login"]."','".password_hash($_POST["mdp"],PASSWORD_BCRYPT)."','".$_POST["email"]."')';
        mysqli_query($conn, $requestins);

    }
    else
    {
        echo "error";
    }
}

function connection($login,$password)
{
    if (isset($_SESSION['login']))
    {
        $requestconn = "SELECT login, password FROM utilisateurs WHERE login = '".$login."'";
        $query = mysqli_query($conn, $requesconn);
        $resutconn = mysqli_fetch_array($query);

        if(!empty($resultat))
        {   
            if ($_POST['login'] == $resultat['login'])
            {
                if (password_verify($_POST['password'], $resultat['password']))
                    {
                        $_SESSION['login'] = $_POST['login'] ;
                    }
            }
                else
                {
                    echo "error";
                }
        }
    }
}

function profil($login,$password,$email)

?>