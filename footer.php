<?php
    include('php/bdd.php');
?>

<div class="flexArticle">
    <div class="footerHours">
        <h4>HORAIRES D'OUVERTURE</h4>        
        <div class="flexHours">
            <?php
                include_once('php/hours_print.php');
            ?>
        </div>
    </div>
    <div class="flexRow footerContact around">
        <div>
            <h4>ADRESSE</h4>
            <p>24 rue Machin-Chose</p>
            <p>73000 CHAMBÉRY</p>
        </div>
        <div>
            <h4>TÉLÉPHONE</h4>
            <p>04.50.50.50.50</p>
        </div>
    </div>
</div>

<?php
    $db=null;
?>