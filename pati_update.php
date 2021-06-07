<?php

// var_dump($_POST);
// exit();

 // 各値をpostで受け取る 
// $todo =$_POST['todo'];
// $deadline =$_POST['deadline'];
$participant =$_POST['participant'];
$nation =$_POST['nation'];
$price =$_POST['price'];
$banquet =$_POST['banquet'];
$hotel=$_POST['hotel'];
$type =$_POST['type'];
$date =$_POST['date'];
$id = $_POST['id']; 

include('functions.php');
$pdo= connect_to_db();

// idを指定して更新するSQLを作成(UPDATE文)
$sql = "UPDATE participant_table SET participant=:participant,nation=:nation, price=:price,banquet=:banquet,
hotel=:hotel,type=:type,date=:date,updated_at=sysdate() WHERE id=:id"; 

$stmt = $pdo->prepare($sql);
// $stmt->bindValue(':todo', $todo, PDO::PARAM_STR); 
// $stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR); 
$stmt->bindValue(':participant', $participant, PDO::PARAM_STR); 
$stmt->bindValue(':nation', $nation, PDO::PARAM_STR); 
$stmt->bindValue(':price', $price, PDO::PARAM_STR); 
$stmt->bindValue(':banquet', $banquet, PDO::PARAM_STR); 
$stmt->bindValue(':hotel', $hotel, PDO::PARAM_STR); 
$stmt->bindValue(':type', $type, PDO::PARAM_STR); 
$stmt->bindValue(':date', '2021-06-06', PDO::PARAM_STR); 

$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

 // 各値をpostで受け取る
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する 
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
  } else {
  // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する
  header("Location:pati_read.php");
  exit();
  }


?>

