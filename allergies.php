<div class="flexCol">
    <p>Allergies</p>
    <div class="allergies">
        <div class="allergy">
            <input type="checkbox" id="gluten" name="gluten" value="gluten" class="allergy-box">
            <label for="gluten">Gluten</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="crustaces" name="crustaces" value="crustaces" class="allergy-box">
            <label for="crustaces">Crustacés</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="oeufs" name="oeufs" value="oeufs" class="allergy-box">
            <label for="oeufs">Oeufs</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="poissons" name="poissons" value="poissons" class="allergy-box">
            <label for="poissons">Poissons</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="arachides" name="arachides" value="arachides" class="allergy-box">
            <label for="arachides">Arachides</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="soja" name="soja" value="soja" class="allergy-box">
            <label for="soja">Soja</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="lait" name="lait" value="lait" class="allergy-box">
            <label for="lait">Lait</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="coques" name="coques" value="coques" class="allergy-box">
            <label for="coques">Fruits à coques</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="celeri" name="celeri" value="celeri" class="allergy-box">
            <label for="celeri">Céleri</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="moutarde" name="moutarde" value="moutarde" class="allergy-box">
            <label for="moutarde">Moutarde</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="sesame" name="sesame" value="sesame" class="allergy-box">
            <label for="sesame">Graines de sésame</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="sulfites" name="sulfites" value="sulfites" class="allergy-box">
            <label for="sulfites">Sulfites</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="lupin" name="lupin" value="lupin" class="allergy-box">
            <label for="lupin">Lupin</label>
        </div>
        <div class="allergy">
            <input type="checkbox" id="mollusques" name="mollusques" value="mollusques" class="allergy-box">
            <label for="mollusques">Mollusques</label>
        </div>
    </div>
</div>

<?php
    include_once('php/bdd.php');
    if (isset($_SESSION['user'])){
        $id = $_SESSION['allergy'];
    } else {
        $id = 1;
    };
    $statement = $db->prepare("SELECT * FROM allergies INNER JOIN users ON allergies.allergy_id = users.id_allergy WHERE users.id_allergy = :id");
    $statement->bindValue(':id', $id);
    $statement->execute();
    $result = $statement->fetch();

    //Coche les checkboxes
    if (isset($_SESSION['user'])){
        if ($result['gluten']==1){echo '<script>document.getElementById("gluten").checked=true</script>';}
        if ($result['crustaces']==1){echo '<script>document.getElementById("crustaces").checked=true</script>';}
        if ($result['oeufs']==1){echo '<script>document.getElementById("oeufs").checked=true</script>';}
        if ($result['poissons']==1){echo '<script>document.getElementById("poissons").checked=true</script>';}
        if ($result['arachides']==1){echo '<script>document.getElementById("arachides").checked=true</script>';}
        if ($result['soja']==1){echo '<script>document.getElementById("soja").checked=true</script>';}
        if ($result['lait']==1){echo '<script>document.getElementById("lait").checked=true</script>';}
        if ($result['coques']==1){echo '<script>document.getElementById("coques").checked=true</script>';}
        if ($result['celeri']==1){echo '<script>document.getElementById("celeri").checked=true</script>';}
        if ($result['moutarde']==1){echo '<script>document.getElementById("moutarde").checked=true</script>';}
        if ($result['sesame']==1){echo '<script>document.getElementById("sesame").checked=true</script>';}
        if ($result['sulfites']==1){echo '<script>document.getElementById("sulfites").checked=true</script>';}
        if ($result['lupin']==1){echo '<script>document.getElementById("lupin").checked=true</script>';}
        if ($result['mollusques']==1){echo '<script>document.getElementById("mollusques").checked=true</script>';}
    };
?>