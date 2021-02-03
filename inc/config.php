<?php
// Connection aux bases de données
$pdo = new PDO('mysql:host=localhost;dbname=sayna',"root","root");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
