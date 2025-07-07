<?php
require_once('funcs.php');
$pdo = connectToDb();

$sql = 'INSERT INTO hotel_reservations(hotel_name, guest_name, checkin_date, checkout_date)
        VALUES(:hotel_name, :guest_name, :checkin_date, :checkout_date)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':hotel_name', $_POST['hotel_name'], PDO::PARAM_STR);
$stmt->bindValue(':guest_name', $_POST['guest_name'], PDO::PARAM_STR);
$stmt->bindValue(':checkin_date', $_POST['checkin_date'], PDO::PARAM_STR);
$stmt->bindValue(':checkout_date', $_POST['checkout_date'], PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  echo 'DB Error';
} else {
  header('Location: select.php');
  exit();
}
?>