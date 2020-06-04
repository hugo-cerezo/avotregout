<?php
class user
{
    public $id = "1";
    public $login = "Admin";
    public $email = "admin@admin.com";
    public $phone = "0123456789";
    public $adress = "42 rue du JavaScript";
    public $rank = "admin";
    public $connectState = true;

    public function connectBdd()
    {
        $conn = new PDO("mysql:host=localhost;dbname=avotregout;charset=utf8", "root", "");
        return $conn ;
    }
    public function getUserData()
    {
        if ($this->connectState == true) {
            return [$this->id, $this->login, $this->email, $this->phone, $this->adress, $this->rank];
        } else {
            echo 'merci de vous connectez';
        }
    }
    public function isConnected()
    {
        return $this->connectState;
    }
    public function getRank()
    {
        if ($this->connectState == true) {
            return $this->rank;
        } else {
            echo 'merci de vous connectez';
        }
    }
    public function getId()
    {
        if ($this->connectState == true) {
            return $this->id;
        } else {
            echo 'merci de vous connectez';
        }
    }
    public function disconnect()
    {
        $this->id = "";
        $this->login = "";
        $this->email = "";
        $this->phone = "";
        $this->adress = "";
        $this->rank = "";
        $this->connectState = false;
        header('location:index.php');
    }
    public function getConnected()
    {
        $conn = new PDO("mysql:host=localhost;dbname=avotregout", "root", "");
        $sql = "SELECT * FROM users WHERE mail ='$_POST[mail]'";
        $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        if ($result != NULL) {
            if (password_verify($_POST['mdp'], $result["password"])) {
                $this->id = $result['id'];
                $this->login = $result['login'];
                $this->email = $result['email'];
                $this->phone = $result['phone'];
                $this->address = $result['address'];
                $this->rank = $result['rank'];
                $this->connectState = true;
                header("location:index.php");
            } else {
                echo '<p class="text-center my-5">Mauvais Mot De Passe</p>';
            }
        } else {
            echo '<p class="text-center my-5">Adresse inconnu</p>';
        }
    }
    public function getRegistered()
    {
        $pass = htmlspecialchars(password_hash($_POST['mdp'], PASSWORD_DEFAULT));
        $conn = new PDO("mysql:host=localhost;dbname=avotregout", "root", "");
        $sql = "SELECT * FROM users WHERE mail = '$_POST[email]'";
        $result = $conn->query($sql)->fetch();
        $login = htmlspecialchars($_POST['login']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $phone = htmlspecialchars($_POST['phone']);
        if ($result == 0) {

            $sql = "INSERT INTO `users`(`id`,`login`, `password`, `mail`,`address`,`phone`, `rank`) VALUES (NULL,'$login','$pass','$email','$address','$phone',0)";
            $conn->query($sql);
            header('location:connexion.php');
        } else {
            echo '<p class="text-center my-5">Adresse déja prise</p>';
        }
    }
}
?>