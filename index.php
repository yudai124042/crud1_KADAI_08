<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ホテル予約フォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>ホテル予約フォーム</h2>
  <form action="insert.php" method="post">
    ホテル名：<input type="text" name="hotel_name"><br>
    宿泊者名：<input type="text" name="guest_name"><br>
    チェックイン日：<input type="date" name="checkin_date"><br>
    チェックアウト日：<input type="date" name="checkout_date"><br>
    <input type="submit" value="予約する">
  </form>
</div>
</body>
</html>