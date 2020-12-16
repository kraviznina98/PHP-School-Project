<?php

include 'konekcija.php';

class Poruka{
		private $poruka;
		public function getPoruka()
		{
			return $this->poruka;
		}
		public function setPoruka($porukica){
			$this->poruka = $porukica;
		}
	}
	
	$poruka=new Poruka('');

$proizvodID = $_POST['brojProizvodaUpd'];

$cena = $_POST['cena'];

if($konekcija->query("UPDATE `proizvod` SET `cena`=$cena WHERE `proizvodID` = $proizvodID")){
	
	$poruka->setPoruka("Uspešno izmenjen proizvod!");
	echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='prodavnica.html';
</script>";
}else{
	$poruka->setPoruka("Greska pri izmeni proizvoda");
  echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='administracija.html';
</script>";
}

 ?>
