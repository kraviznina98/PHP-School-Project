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

$proizvodID = $_POST['brojProizvodaDel'];
if($konekcija->query("DELETE FROM Proizvod WHERE 'proizvodID' = $proizvodID")){
	
	$poruka->setPoruka("Uspešno obrisan proizvod!");
	echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='prodavnica.html';
</script>";
}else{
	$poruka->setPoruka("Greska pri brisanju proizvoda");
  echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='prodavnica.html';
</script>";
}

 ?>
