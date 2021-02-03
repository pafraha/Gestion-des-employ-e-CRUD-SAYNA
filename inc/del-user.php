<?php include 'config.php';

if (isset($_GET['id'])) {
    //var_dump($_GET['id']); die('Ok!');
    $count = $pdo -> query("DELETE FROM users WHERE id=".$_GET['id']);
    //$count -> bindParam(":id",$_GET['id'],PDO::PARAM_INT);
    $count -> execute();

    $msg = 'Employé-e effacé avec succes!';
}

header('Location: ../');
exit;
