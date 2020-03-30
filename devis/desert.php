<table>
<tbody>
    <tr>
        <td>Nom</td>
        <td>prix</td>
        <td>description</td>
        <td>quantités</td>
        <td></td>
    </tr>
<?php

$conn = mysqli_connect("localhost","root","",'avotregout');
$request="SELECT * FROM `produits` WHERE categorie='dessert'";
$query =mysqli_query($conn, $request);

$row = mysqli_fetch_all($query);

$nbproduits=count($row);
var_dump($nbproduits);
$i = 0;
$ii= 0;
/* affichage table dessert */
while ($i<$nbproduits){
    $ii= 0;
    echo '<tr>';
    echo '<td>',$row[$i][2],'</td>';
    echo '<td>',$row[$i][4],'</td>';
    echo '<td>',$row[$i][5],'</td>';
    echo '<td><select>';
    while ($ii<10){
        $prix = 0;
        $prix = $row[$i][4]*$ii;
        echo '<option value="'.$prix.'">'.$ii.'</option>';
        $ii = $ii+1;
    }
    echo '</select></td>';
    echo '<td><button id="submit"'.$i.'">ajouté</td>';
    $i = $i+1;
}

?>
</tbody>
</table>