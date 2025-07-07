<?php
function connectToDb(){
  $dbn = '';　　//別ファイルに記載
  $user = '';
  $pwd  = '';
  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    exit('DBConnectError:' . $e->getMessage());
  }
}
?>