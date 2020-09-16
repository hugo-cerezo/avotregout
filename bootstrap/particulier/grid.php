<?php
include('class.php');
session_start();
?>
<section class="grid d-flex flex-wrap my-5">
    <?php
    $sql = "SELECT DISTINCT cat FROM articles" . $_GET['cat'];
    $result = $_SESSION["user"]->connectBdd()->query($sql)->fetchAll();
    foreach ($result as $key => $value) {
        if ($value["cat"] != "Contact" && $value["cat"] != "Evenements" && $value["cat"] != 'News') {
    ?>
            <div id="<?php echo $value['cat']; ?>" value="<?php echo $_GET['cat']; ?>" class="col mb-4 navLink" style="cursor:pointer;">
                <div class="card h-100">
                    <img src="src/img/pro.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value["cat"]; ?></h5>
                        <p class="card-text">Visitez la page</p>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</section>