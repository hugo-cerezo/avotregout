<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<?php
$conn = new PDO("mysql:host=localhost;dbname=avotregout", "root", "");
$sql = "SELECT * FROM orders WHERE status= 0 ";
$resultEnCours = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// var_dump($resultEnCours);
echo '<h2><a href="#commande">Commandes</a></h2><h2><a href="#articles">modification articles</a></h2><h2><a href="#news">actualisé les news</a></h2>';
echo '<div id="commande">';
foreach ($resultEnCours as $commande) {
    $sqlname = "SELECT*FROM users where id=$commande[user_id]";
    $resultname = $conn->query($sqlname)->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($resultname);
    echo "<div id='$commande[id]'><p>commande de " . $resultname[0]['login'] . "</p><p>effectué le.$commande[order_date].</p><p>date de livraisson: .$commande[delivery_date].</p>"; //info diverse de la commande
    echo "<input class='cvsinput'  type='button' id='$commande[id]' value='telecharger le devis le devis'>"; //btn traitement cvs
    echo ""; //upload pdf et mailto instantanée
    echo "</div>"; //fermeture du bloc de commande X
}
echo '</div><div id="articles">';
?>
<div id='NewArticle'>
    <h3>Nouvel article</h3>
    <form class="d-flex flex-column col-3 " action="" method="post">
        <div class="form-group">
            <label for="TitleArticle">Nom du produit :</label></br>
            <input class="input border border-warning" type="text" name="TitleArticle" />
        </div>
        <div class="form-group">
            <label for="QuantiteArticle">quantité par commande</label></br>
            <input class="input border border-warning" type="number" name="Quantite" />
        </div>
        <div class="form-group">
            <label for="DecriptionArticle">quantité par commande</label></br>
            <input class="input border border-warning" type="text" name="DecriptionArticle" />
        </div>
        <div class="form-group">
            <label for="PrixArticle">Prix</label></br>
            <input class="input border border-warning" type="number" name="PrixArticle" />
        </div>
        <input class="button1 col-4 border border-warning" type="submit" value="AddArticle" name="AddArticle" />
    </form>
</div>
<div id="UpdateArticle">
    <h3>Mise a jour article</h3>
    <form class="d-flex flex-column col-3 " action="" method="post">
        <div class="form-group">
            <label for="TitleArticle">Nom du produit :</label></br>
            <input class="input border border-warning" type="text" name="TitleUpArticle" />
        </div>
        <div class="form-group">
            <label for="QuantiteArticle">quantité par commande</label></br>
            <input class="input border border-warning" type="number" name="UpQuantite" />
        </div>
        <div class="form-group">
            <label for="DecriptionArticle">quantité par commande</label></br>
            <input class="input border border-warning" type="text" name="UpDecriptionArticle" />
        </div>
        <div class="form-group">
            <label for="PrixArticle">Prix</label></br>
            <input class="input border border-warning" type="number" name="UpPrixArticle" />
        </div>
        <input class="button1 col-4 border border-warning" type="submit" value="UpArticle" name="UpArticle" />
    </form>
</div>
<?php
echo '</div>';
// problemme de bdd crée la table news 
echo '<div id="news"></div></div>';

if (isset($_POST['Addarticle'])) {
    $query = $connect->prepare('INSERT INTO products values (NULL,$_POST["TitleArticle"],$_POST["Quantite"],$_POST["DecriptionArticle"],$_POST["AddArticle"])');
    $query->execute();
}
if (isset($_POST['UpArticle'])) {
    $query = $connect->prepare('UPDATE products SET (name = $_POST["TitleUpArticle"],qtt = $_POST["UpQuantite"],description = $_POST["UpDecriptionArticle"],price = $_POST["UpPrixArticle"])WHERE name =$_POST["TitleUpArticle"] ');
    $query->execute();
}
?>

<script>
    $(document).ready(function() {
        $('.cvsinput').click(function() {
            var devisid = $(this).parent().attr('id')
            /* console.log(devisid) */
            $.ajax({
                url: "cvstraitement.php",
                method: "post",
                data: "cvs=" + devisid,
                success: function(res) {
                    console.log(res)
                    // changer l'id pour qu'il soit celui des commandes
                    $('#' + devisid).append('<a href="' + devisid + '" download> file_name </a>')
                }
            })
        })
    })
</script>