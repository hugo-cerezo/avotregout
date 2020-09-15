<?php
$idcommande = $_POST['cvs'];
$data = [];
$sql ="SELECT*FROM orders WHERE id=$idcommande";
$conn = new PDO("mysql:host=localhost;dbname=avotregout", "root", "");
$commande = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
var_dump($commande);
$description = explode(':',$commande[0]['note']);
var_dump($description);

// /* foreach($description as $desc)
// {
//     $data = $data + array("$desc","$desc","","$commande[]","$commande[address]");
// } */
// //test

// // output headers so that the file is downloaded rather than displayed
// header('Content-type: text/csv');
// header("Content-Disposition: attachment; filename='test.csv'");
 
// // do not cache the file
// header('Pragma: no-cache');
// header('Expires: 0');
 
// // create a file pointer connected to the output stream
// $file = fopen("test.csv", 'w');
 
// // send the column headers
// fputcsv($file, array('name', 'qtt', 'price','date','adresse'));
 
// // Sample data. This can be fetched from mysql too
// $data = array(
// array('test', 'test', 'test', 'test', 'test'),
// array('test', 'test', 'test', 'test', 'test'),
// array('test', 'test', 'test', 'test', 'test')
// );
 
// // output each row of the data
// foreach ($data as $row)
// {
// fputcsv($file, $row);
// }

//dl test
$file = 'test.csv';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}