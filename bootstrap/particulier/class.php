<?php
class user
{
    public $id = "";
    public $login = "";
    public $email = "";
    public $phone = "";
    public $adress = "";
    public $rank = "admin";
    // Bool check if user is connected
    public $connectState = true;

    public function connectBdd()
    {
        $conn = new PDO("mysql:host=localhost;dbname=avotregout;charset=utf8", "root", "");
        return $conn;
    }
    public function getUserData()
    {
        if ($this->connectState == true) {
            return [$this->id, $this->login, $this->email, $this->phone, $this->adress, $this->rank];
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
        }
    }
    public function getId()
    {
        if ($this->connectState == true) {
            return $this->id;
        }
    }

    public function getNews()
    {
        $sth = $this->connectBdd()->prepare('SELECT * FROM `articles` WHERE cat = ? AND start <= NOW() AND end >= NOW()');
        $sth->execute(array('news'));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
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
        $sql = "SELECT * FROM users WHERE mail ='$_POST[mail]'";
        $result = $this->connectBdd()->query($sql)->fetch(PDO::FETCH_ASSOC);
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
        $sql = "SELECT * FROM users WHERE mail = '$_POST[email]'";
        $result = $this->connectBdd()->query($sql)->fetch();
        $login = htmlspecialchars($_POST['login']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $phone = htmlspecialchars($_POST['phone']);
        if ($result == 0) {
            $sql = "INSERT INTO `users`(`id`,`login`, `password`, `mail`,`address`,`phone`, `rank`) VALUES (NULL,'$login','$pass','$email','$address','$phone',0)";
            $this->connectBdd()->query($sql);
            header('location:connexion.php');
        } else {
            echo '<p class="text-center my-5">Adresse déja prise</p>';
        }
    }
}
