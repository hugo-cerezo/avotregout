<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script async src="devis.js"></script>
<?php
$sql = 'SELECT * FROM products ';
$sql2 = 'SELECT * FROM formules';
$conn = new PDO("mysql:host=localhost;dbname=avotregout;charset=utf8", "root", "");
$requestProduct = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$requestFormules = $conn->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="containerDevisActuel" class="row justify-content-around m-2 p-2" style='display:flex;'>
    <div class='col-5 border border-dark'>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                choix cat
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php
                foreach ($requestFormules as $formules) {
                    echo "<a id='$formules[title]' value='".nl2br($formules['description'])."' class='dropdown-item' href='#'>$formules[title]</a>";
                }
                ?>
            </div>
        </div>
        <?php
/*         foreach ($requestProduct as $products) {
            echo "<div class='d-flex justify-content-between' id='$products[name]'><p>" . $products['name'] . "</p><p class='navLink' id='description$products[name]'>description</p><input class='justify-content-end' type='number' id='qtt$products[name]' value='1'><p class='justify-content-end'>$products[qtt]</p><input class='justify-content-end addProductBtn' type='button' id='$products[name]' value='add'><p id='textdescription$products[name]' style='display:none;'>$products[description]</p></div>";
        } */
        echo '<table>';
        foreach ($requestProduct as $products)
        {
            echo "<tr id='$products[name]'><td>$products[name]</td>";
            echo '<td class="text-align-center" id="description'.$products["name"].'"><p><svg class="bi bi-info" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
            <circle cx="8" cy="4.5" r="1"/>
          </svg></p></td>';
            echo "<td><input class='justify-content-end' type='number' id='qtt$products[name]' value='1'></td>";
            echo "<td>par $products[qtt]</td>";
            echo "<td><input class='justify-content-end addProductBtn' type='button' id='$products[name]' value='add'></td>";
            echo "</tr>";
            echo "<tr style='display:none;'><td id='textdescription$products[name]'>$products[description]</td></tr>";

        }
        echo"</table>";
        ?>
    </div>
    <div class="col-5 border border-dark" id="devisActuel">
    </div>
</div>
<div id="containerDevisFinal" class='row justify-content-md-center  m-auto p-2 ' style='display:none;'>
    <div id="devisFinal" class="justify-content-md-center col-8 h-100 border border-dark">
    </div>
</div>

