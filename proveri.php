<?php

$sifra = $_GET['sifra'];
$sifra = trim($sifra);

if($sifra == 'bolali'){
  include 'dodaj.php';
  include 'izmeni.php';
  include 'brisanje.php';
}else{
  echo("<h1>Pogresna sifra</h1>");
}

 ?>
