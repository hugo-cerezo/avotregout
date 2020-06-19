<h6>
    <?php if ($result != null) {
        echo $result[0]['title'];
    } else {
        echo 'News';
    } ?></h6>
<p class="card-text"><?php if ($result != null) {
                            echo $result[0]['text'];
                        } else {
                            echo 'Aucune nouvelle';
                        } ?>
</p>