<?php
    echo '<div class="flexCol menu">';
        echo '<div>';
            echo '<div class="flexCol">';
                echo '<label for="menu-title">Nom du menu</label>';
                echo '<input type="text" class="input" name="menu-title" id="menu-title" value="">';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-title">Nom de la formule</label>';
                echo '<input type="text" class="input" name="formule-title" id="formule-title" value="">';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-period">Période de la formule</label>';
                echo '<input type="text" class="input" name="formule-period" id="formule-period" value="">';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-desc">Description de la formule</label>';
                echo '<textarea name="formule-desc" id="formule-desc" cols="30" rows="10" class="area"></textarea>';
            echo '</div>';
            echo '<div class="flexCol">';
                echo '<label for="formule-price">Prix de la formule</label>';
                echo '<input type="number" step="0.01" class="input" name="formule-price" id="formule-price" value="">';
            echo '</div>';            
            echo '</div>';
        echo '<button type="button" class="btn" id="btn-menu-add" onclick="addMenu()">Enregistrer</button>';
    echo ' </div>';
?>