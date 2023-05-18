<div>
    <h1><a href="index.php" class="titreSite txtWhite ">Quai Antique</a></h1>
</div>

<?php
if (isset($_SESSION['email'])) {
    if ($_SESSION['admin'] === 1000) {
        $user = $_SESSION['user'];
        echo '<div class="userConnected flexRow">';
        echo '<a href="administration.php">
        <img src="images/user.png" class="icon">
        </a>';
        echo '<form action="php/disconnect.php" method="post">
        <button class="btn-icon">
        <img src="images/logout.png" class="icon">
        </button>
        </form>';
        echo '</div>';
    } else if ($_SESSION['admin'] === 0) {
        $user = $_SESSION['user'];
        echo '<div class="userConnected flexRow">';
        echo '<a href="user_account.php">
        <img src="images/user.png" class="icon">
        </a>';
        echo '<form action="php/disconnect.php" method="post">
        <button class="btn-icon">
        <img src="images/logout.png" class="icon">
        </button>
        </form>';
        echo '</div>';


    }
};
?>