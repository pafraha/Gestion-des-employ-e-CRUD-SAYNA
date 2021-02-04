<?php
if (isset($_GET['ids'])) {
    include 'config.php';
    $count = $pdo -> query("DELETE FROM users WHERE id=".$_GET['ids']);
    $count -> execute();

    $_SESSION['flash'] = [
        'msg' => 'Employé-e effacé avec succes!',
        'type' => 'success'
    ];
} else {
    $_SESSION['flash'] = [
        'msg' => 'Erreur ! Veuiller verifier votre information',
        'type' => 'danger'
    ];
}

header('Location: ../');
exit;
