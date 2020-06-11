<?php
include('class.php');
session_start();
?>
<section class="grid d-flex flex-wrap my-5">
    <?php
    $sql = "SELECT DISTINCT cat FROM articles";
    $result = $_SESSION["user"]->connectBdd()->query($sql)->fetchAll();
    foreach ($result as $key => $value) {
        if ($value["cat"] != "Contact" && $value["cat"] != "Evenements" && $value["cat"] != 'News') {
    ?>
            <div id="<?php echo $value['cat']; ?>" class="col mb-4 navLink" style="cursor:pointer;">
                <div class="card h-100">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value["cat"]; ?></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</section>