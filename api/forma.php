<?php
echo "<h1>Jusu duomenys gauti</h1>";

$vardas = $_POST["name"];
$pastas = $_POST["email"];
$telefonas = $_POST["phone"];
$zinute = $_POST["msg"];

$tekstas = "";
if (strlen($vardas) <= 3) {
    $tekstas = "Ivestas vardas per trumpas! <br>";
} else {
    $tekstas = "Liuks <br>";
}



echo $tekstas;
print_r($_POST);


echo "<br> <a href='index.php'>GRIZTI</a>";




?>
