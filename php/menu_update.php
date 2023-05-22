<?php
    $formule = $_POST['formule'];

    include_once('../php/bdd.php');

    $statement = $db->prepare("SELECT * FROM menus WHERE formule_title = :ft");
    $statement->bindValue(':ft', $formule);
    $statement->execute();
    $result = $statement->fetch();

    echo '<div class="flexCol menu">';
        echo '<div>';
            echo '<div class="flexCol">';
                echo '<label for="menu-title">Nom du menu</label>';
                echo '<input type="text" class="input" name="menu-title" id="menu-title" value="'.$result['menu_title'].'">';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-title">Nom de la formule</label>';
                echo '<input type="text" class="input" name="formule-title" id="formule-title" value="'.$result['formule_title'].'">';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-period">Période de la formule</label>';
                echo '<input type="text" class="input" name="formule-period" id="formule-period" value="'.$result['formule_period'].'">';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-desc">Description de la formule</label>';
                echo '<textarea name="formule-desc" id="formule-desc" cols="30" rows="10" class="area">'.$result['formule_desc'].'</textarea>';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-price">Prix de la formule</label>';
                echo '<input type="number" step="0.01" class="input" name="formule-price" id="formule-price" value="'.$result['formule_price'].'">';
            echo '</div>';            
            echo '</div>';
        echo '<button type="button" class="btn" id="btn-menu-add" onclick="addMenu()">Enregistrer</button>';
    echo ' </div>';
?>