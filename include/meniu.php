<?php
//Formuojamas meniu.
if (isset($session) && $session->logged_in) {
    $path = "";
    if (isset($_SESSION['path'])) {
        $path = $_SESSION['path'];
        unset($_SESSION['path']);
    }
    ?>
    <table width=100% border="0" cellspacing="1" cellpadding="3" class="meniu">
        <?php
        echo "<tr><td>";
        echo "Prisijungęs vartotojas: <b>$session->username</b> <br>";
        echo "</td></tr><tr><td>";
        echo "[<a href=\"" . $path . "userinfo.php?user=$session->username\">Mano paskyra</a>] &nbsp;&nbsp;"
            . "[<a href=\"" . $path . "api.php\">Mano testai</a>] &nbsp;&nbsp;";

        echo "[<a href=\"" . $path . "process.php\">Atsijungti</a>]";
        echo "</td></tr>";
        ?>
    </table>
    <?php
}//Meniu baigtas
?>

<?php