<?php

// var_dump($_GET);
// exit();

$id = $_GET['id'];

include('functions.php');
$pdo= connect_to_db();

$sql = 'DELETE FROM participant_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header('Location:pati_read.php');
  exit();
}

?>



