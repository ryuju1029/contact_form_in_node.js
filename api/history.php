<?php 
ini_set('display_errors', 1);

$dsn = 'mysql:dbname=contact_form;host=localhost;charset=utf8';
$user = 'root';
$password = 'root';
$pdo = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM contacts";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Access-Control-Allow-Origin: *");
echo json_encode($contacts);
die;