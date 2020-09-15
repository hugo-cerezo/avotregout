<div id='commandeEnCours'>
    <?php
    $conn = new PDO("mysql:host=localhost;dbname=avotregout", "root", "");
    $id = $_SESSION['user']->getId();
    $sql = "SELECT * FROM orders WHERE user_id = $id AND status= 0 ";
    $resultEnCours = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($resultEnCours); */
    echo '<h3>Devis en cours</h3>';
    foreach ($resultEnCours as $result) {
        echo 'numero de commande : ' . $result['id'];
        echo '  date de la commande : ' . $result['order_date'];
        echo '  date de livraison : ' . $result['delivery_date'];
        echo '  adresse de livraison : ' . $result['delivery_address'];
    }

    ?>

</div>
<div id='commandeTraite'>
    <?php


    $sql = "SELECT * FROM orders WHERE user_id = $id AND status= 1 ";

    $resultTraite = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($resultTraite); */
    echo '<h3>Devis Traité</h3>';
    foreach ($resultTraite as $result) {
        echo 'numero de commande : ' . $result['id'];
        echo '  date de la commande : ' . $result['order_date'];
        echo '  date de livraison : ' . $result['delivery_date'];
        echo '  adresse de livraison : ' . $result['delivery_address'];
    }
    echo '</div><div>';
    echo '<h3>Modifier mes informations</h3>';
    ?>
    <form action="" method="post" class="flexc">
        <label> Login : </label>
        <input class="input" type="text" name="login" value=<?php //$_SESSION[id] ?> /></br>
        <label> Password : </label>
        <input class="input" type="password" name="mdp" value="" /></br>
        <label for="adresse">adresse : </label>
        <input class="input" type="text" name="adresse" /><br />
        <label for="mail">email : </label>
        <input class="input" type="email" name="mail" /><br />
        <input class="button" type="submit" name="envoie" value="Modifier" />
    </form>
</div>