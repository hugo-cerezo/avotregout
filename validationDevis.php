<?php
$i = 0;
$cookie = $_POST['cookie'];
$devis = explode(',', $cookie);
/* var_dump($test) ; */
if ($devis != 0) {
    echo '<h2>Recapitulatif du devis</h2>';
    echo '<form class="d-flex flex-column" action="" method="post">
            <div class="form-group">
                <label for="adresseLivraison">veuillez indiquez votre addresse de livraison :</label></br>
                <input class="input border border-warning" type="text" id="adresseLivraison" name="adresseLivraison"/>
            </div>
            <div class="form-group">
                <label for="example-number-input" class="">veuillez indiquez le nombre de personne :</label></br>
                <input class="input border border-warning" type="number" value="10" id="nbpersonne">
            </div>
            </form>';
    echo '<p>veuillez renseigné la date de livraison :</p>
    <div class="form-group d-flex row">
    <div class="col-10">
      <input class="form-control" type="datetime-local" value="2020-08-19T13:45:00" id="dateLivraison">
    </div>
    </div>';
    echo '<p>avez vous un code promo ? </p><input type="text" id="codePromo">';
    foreach ($devis as $product) {
        $i++;
        echo '<p id=' . $i . '>' . $product;
        echo '</p>';
    }
       /*  echo "<input class='test'  type='button' id='bddDevis' value='valider mon devis'>"; */
}
