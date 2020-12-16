<?php include 'konekcija.php'; 
?>

<h1 style="color:rgb(255, 217, 0);" class="text-center">Izmeni cenu proizvoda</h1>

<form method="POST" action="update.php">
	  <label style="color:rgb(255, 217, 0);" for="naziv">ID proizvoda</label>
 
 <select name="brojProizvodaUpd" class="form-control">
    <?php
    $sql = "SELECT p.proizvodID as proizvodID ,p.naziv as proizvodNaziv, k.nazivKategorije as kategorijaNaziv, v.nazivVelicine as velicinaNaziv FROM proizvod p JOIN Kategorija k ON (p.kategorijaId=k.kategorijaId) JOIN Velicina v ON (p.velicinaID=v.velicinaId) ORDER BY proizvodID";

    $rezultat = $konekcija->query($sql);
    while($red = $rezultat->fetch_assoc()){
     ?>
	 <option value="<?php echo $red['proizvodID']; ?>">
		<?php echo $red['proizvodID'];
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
 
  <label style="color:rgb(255, 217, 0);" for="cena">Cena</label>
  <input type="number" name="cena" id="cena" class="form-control" placeholder="Unesite cenu">
  
  <label for="submit"></label>
  <input type="submit" name="submit" id="submit" class="form-control btn-success" value="Izmeni proizvod">

</form>

<br><br><br><br>

<script type="text/javascript" src="provera.js"></script>
