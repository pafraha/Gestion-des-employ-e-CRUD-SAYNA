<?php include 'config.php';

if (isset($_GET['id'])) {
    $name_u = isset($_POST['name_u']) ? $_POST['name_u'] : '';
    $email_u = isset($_POST['email_u']) ? $_POST['email_u'] : '';
    $adress_u = isset($_POST['adress_u']) ? $_POST['adress_u'] : '';
    $phone_u = isset($_POST['phone_u']) ? $_POST['phone_u'] : '';

    $stmt = $pdo->prepare('UPDATE users SET name_u = ?, email_u = ?, adress_u = ?, phone_u = ? WHERE id = '.$_GET['id']);
    $stmt->execute([$name_u, $email_u, $adress_u, $phone_u]);

    $msg = 'Modification avec succes!';
}

header('Location: ../');
exit;
