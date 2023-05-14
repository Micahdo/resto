<?php
    include('php/bdd.php');
?>

<div class="flexRow footerDiv">
    <div class="footerHours">
        <h4>HORAIRES D'OUVERTURE</h4>
        <div class="flexRow around">
            <?php
                include_once('php/hours_print.php');
            ?>
        </div>
    </div>
    <div class="footerAddress">
        <h4>ADRESSE</h4>
        <p>24 rue Machin-Chose</p>
        <p>73000 CHAMBÉRY</p>
    </div>
    <div class="footerPhone">
        <h4>TÉLÉPHONE</h4>
        <p>04.50.50.50.50</p>
    </div>
</div>