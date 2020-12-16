<?php include 'konekcija.php'; 
?>

<h1 style="color:rgb(255, 217, 0);" class="text-center">Obriši proizvod</h1>

<form method="post" action="delete.php">
	  <label style="color:rgb(255, 217, 0);" for="naziv">ID proizvoda</label>
 
 <select name="brojProizvodaDel" class="form-control">
    <?php
    $sql = "SELECT p.proizvodID as proizvodID ,p.naziv as proizvodNaziv, k.nazivKategorije as kategorijaNaziv, v.nazivVelicine as velicinaNaziv FROM proizvod p JOIN Kategorija k ON (p.kategorijaId=k.kategorijaId) JOIN Velicina v ON (p.velicinaID=v.velicinaId) ORDER BY proizvodID";

    $rezultat = $konekcija->query($sql);
    while($red = $rezultat->fetch_assoc()){
     ?>
	 <option value="<?php echo $red['proizvodID']; ?>">
    <?php 
    echo $red['proizvodID'];
		echo '  |  '; 
		echo $red['proizvodNaziv'];
		echo '  |  '; 
		echo $red['kategorijaNaziv'];
		echo '  |  '; 
		echo $red['velicinaNaziv']; ?>
	</option>
    <?php
    }
    ?>
  </select>
  
  <label for="submit"></label>
  <input type="submit" name="submit" id="submit" class="form-control btn-success" value="Obriši Proizvod">

</form>

<br><br><br><br>

<!-- <script type="text/javascript" src="brisanje.js"></script> -->