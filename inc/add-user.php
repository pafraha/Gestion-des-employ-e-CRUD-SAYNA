<?php
include_once 'config.php';

if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $name = isset($_POST['name_u']) ? $_POST['name_u'] : '';
    $email = isset($_POST['email_u']) ? $_POST['email_u'] : '';
    $adress = isset($_POST['adress_u']) ? $_POST['adress_u'] : '';
    $phone = isset($_POST['phone_u']) ? $_POST['phone_u'] : '';
    $created = isset($_POST['created_at']) ? $_POST['created_at'] : date('Y-m-d H:i:s');

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO users VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $email, $adress, $phone, $created]);

    $msg = 'Nouveau employé-e crée avec succes!';
}

header('Location: ../');
exit;
