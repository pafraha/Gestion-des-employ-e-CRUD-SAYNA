<?php
if (isset($_GET['ids'])) {
    include 'config.php';
    $count = $pdo -> query("DELETE FROM users WHERE id=".$_GET['ids']);
    $count -> execute();

    $msg = 'Employé-e effacé avec succes!';
}

header('Location: ../');
exit;
