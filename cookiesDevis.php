<?php
$i = 0;
$cookie = $_POST['cookie'];
$test = explode(',', $cookie);
/* var_dump($test) ; */
foreach ($test as $product) {

  echo '<p id=' . $i . '>&nbsp' . $product . '<button id="supressionArticle" type="button" class="close" aria-label="Close">
    <span aria-hidden="false">&times;</span>
  </button></p>';
  $i++;
}
echo "<input class='validationDevis'  type='button' id='validationDevis' value='valider le devis'>";
