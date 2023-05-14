<div class="headerDiv">
    <h1><a href="index.php" class="titreSite txtWhite ">Quai Antique</a></h1>
</div>

<?php
if (isset($_SESSION['email'])) {
    if ($_SESSION['admin'] == 1000) {
        $user = $_SESSION['user'];
        echo '<div class="userConnected">';
        //echo '<p>Bienvenue '.$user.'</p>';
        echo '<a href="administration.php" class="linkAdmin">Bienvenue '.$user.'</a>';
        echo '<form action="php/disconnect.php" method="post">
        <button class="btnDisconnect">Déconnexion</button>
        </form>';
        echo '</div>';
    } else if ($_SESSION['admin'] === 0) {
        $user = $_SESSION['user'];
        echo '<div class="userConnected">';
        echo '<p>Bienvenue '.$user.'</p>';
        echo '<form action="php/disconnect.php" method="post">
        <button class="btnDisconnect">Déconnexion</button>
        </form>';
        echo '</div>';
    }
};
?>