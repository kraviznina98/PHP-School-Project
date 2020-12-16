<?php include 'konekcija.php'; 
?>

<h1 style="color:rgb(255, 217, 0);" class="text-center">Dodaj proizvod</h1>

<form method="POST" action="add.php">
	  <label style="color:rgb(255, 217, 0);" for="naziv">Broj proizvoda</label>
  <input type="text" name="proizvodID" id="proizvodID" class="form-control" placeholder="Unesite broj proizvoda" onblur="proveri(document.getElementById('proizvodID').value)">
 <div id='ajax'></div>
  <label style="color:rgb(255, 217, 0);" for="naziv">Naziv</label>
  <input type="text" name="naziv" id="naziv" class="form-control" placeholder="Unesite naziv proizvoda">
  <label style="color:rgb(255, 217, 0);" for="cena">Cena</label>
  <input type="number" name="cena" id="cena" class="form-control" placeholder="Unesite cenu">
  <label style="color:rgb(255, 217, 0);" for="kategorija">Kategorija</label>
  <select name="kategorija" class="form-control">
    <?php
    $sql = "select * from kategorija";

    $rezultat = $konekcija->query($sql);
    while($red = $rezultat->fetch_assoc()){
     ?>
     <option value="<?php echo $red['kategorijaID']; ?>"><?php echo $red['nazivKategorije']; ?></option>
     <?php
   }
      ?>

  </select>
  <label style="color:rgb(255, 217, 0);" for="velicina">Velicina</label>
  <select name="velicina" class="form-control">
    <?php
    $sql = "select * from velicina";

    $rezultat = $konekcija->query($sql);
    while($red = $rezultat->fetch_assoc()){
     ?>
     <option value="<?php echo $red['velicinaID']; ?>"><?php echo $red['nazivVelicine']; ?></option>
     <?php
   }
      ?>

  </select>
  <label for="submit"></label>
  <input type="submit" name="submit" id="submit" class="form-control btn-success" value="Dodaj proizvod">

</form>

<br><br><br><br>


<script type="text/javascript" src="provera.js"></script>
