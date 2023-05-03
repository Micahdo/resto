<div class="headerDiv">
    <h1><a href="index.php" class="titreSite txtWhite ">Quai Antique</a></h1>
</div>

<?php
if (isset($_SESSION['user'])) {
    if ($_SESSION['admin'] === 1) {
        $user = $_SESSION['user'];
        echo '<div class="userConnected">';
        echo '<a href="administration.php" class="linkAdmin">Administration</a>';
        echo '<p class="userConnexion txtWhite ">'.$user.'</p>';
        echo '<form action="php/disconnect.php" method="post">
        <button class="btnDisconnect">Déconnexion</button>
        </form>';
        echo '</div>';
    } else if ($_SESSION['admin'] === 0) {
        $user = $_SESSION['user'];
        echo '<div class="userConnected">';
        echo '<p class="userConnexion txtWhite ">'.$user.'</p>';
        echo '<form action="php/disconnect.php" method="post">
        <button class="btnDisconnect">Déconnexion</button>
        </form>';
        echo '</div>';
    }
};
?>