<?php
require_once('funcs.php');
$pdo = connectToDb();

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM hotel_reservations WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$r = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form action="update_act.php" method="post">
  <input type="hidden" name="id" value="<?= $r['id'] ?>">
  ホテル名：<input type="text" name="hotel_name" value="<?= $r['hotel_name'] ?>"><br>
  宿泊者名：<input type="text" name="guest_name" value="<?= $r['guest_name'] ?>"><br>
  チェックイン日：<input type="date" name="checkin_date" value="<?= $r['checkin_date'] ?>"><br>
  チェックアウト日：<input type="date" name="checkout_date" value="<?= $r['checkout_date'] ?>"><br>
  <input type="submit" value="更新">
</form>