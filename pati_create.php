<?php

// var_dump($_POST);
// exit();

// include('function.php');
// $pdo= connect_to_db();


if ( !isset($_POST['participant']) || $_POST['participant']=='' ||
!isset($_POST['nation']) || $_POST['nation']=='' || 
!isset($_POST['price']) || $_POST['price']=='' || 
!isset($_POST['banquet']) || $_POST['banquet']=='' || 
!isset($_POST['hotel']) || $_POST['hotel']=='' || 
!isset($_POST['type']) || $_POST['type']=='' || 
!isset($_POST['date']) || $_POST['date']=='' 


  // !isset($_POST['todo']) || $_POST['todo'] == '' ||
  // !isset($_POST['deadline']) || $_POST['deadline'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  // exit();
}

// $todo = $_POST['todo'];
// $deadline = $_POST['deadline'];
$participant =$_POST['participant'];
$nation =$_POST['nation'];
$price =$_POST['price'];
$banquet =$_POST['banquet'];
$hotel=$_POST['hotel'];
$type =$_POST['type'];
$date =$_POST['date'];

$dbn = 'mysql:dbname=gsacf_l05_14;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
exit();
}

// $sql = 'INSERT INTO todo_table(id, todo, deadline, created_at, updated_at) VALUES(NULL, :todo, :deadline, sysdate(), sysdate())';

$sql = 'INSERT INTO participant_table(id, participant, nation, price, banquet, hotel, type, date, created_at, updated_at) VALUES (NULL,:participant,:nation,:price ,:banquet,:hotel,:type,:date,sysdate(),sysdate())';


// $stmt = $pdo->prepare($sql);
// $stmt->bindValue(':todo', $todo, PDO::PARAM_STR);
// $stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);
// $status = $stmt->execute();

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':participant', $participant, PDO::PARAM_STR); 
$stmt->bindValue(':nation', $nation, PDO::PARAM_STR); 
$stmt->bindValue(':price', $price, PDO::PARAM_STR); 
$stmt->bindValue(':banquet', $banquet, PDO::PARAM_STR); 
$stmt->bindValue(':hotel', $hotel, PDO::PARAM_STR); 
$stmt->bindValue(':type', $type, PDO::PARAM_STR); 
$stmt->bindValue(':date', '2021-06-06', PDO::PARAM_STR); 
$status = $stmt->execute(); // SQLを実行



if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  // exit();
} else {
  header('Location:pati_input.php'); 
  // header("Location:todo_input.php");
  // exit();
}
