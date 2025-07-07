<?php
require_once('funcs.php');
$pdo = connectToDb();

$sql = 'UPDATE hotel_reservations SET
          hotel_name = :hotel_name,
          guest_name = :guest_name,
          checkin_date = :checkin_date,
          checkout_date = :checkout_date
        WHERE id = :id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':hotel_name', $_POST['hotel_name'], PDO::PARAM_STR);
$stmt->bindValue(':guest_name', $_POST['guest_name'], PDO::PARAM_STR);
$stmt->bindValue(':checkin_date', $_POST['checkin_date'], PDO::PARAM_STR);
$stmt->bindValue(':checkout_date', $_POST['checkout_date'], PDO::PARAM_STR);
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();

header('Location: select.php');
exit();
?>