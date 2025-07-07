<?php
require_once('funcs.php');
$pdo = connectToDb();

$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM hotel_reservations WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

header('Location: select.php');
exit();
?>