<?php

include('functions.php');
$pdo= connect_to_db();

$dbn = 'mysql:dbname=gsacf_l05_14;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  // exit();
}

// $sql = 'SELECT * FROM todo_table';
$sql = 'SELECT * FROM participant_table ORDER BY id DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  // exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
  $output = "";
  foreach ($result as $record) {
    $output .= "<tr>";
  $output .= "<td>{$record["participant"]}</td>"; 
  $output .= "<td>{$record["nation"]}</td>"; 
  $output .= "<td>{$record["price"]}</td>"; 
  $output .= "<td>{$record["banquet"]}</td>"; 
  $output .= "<td>{$record["hotel"]}</td>"; 
  $output .= "<td>{$record["type"]}</td>"; 
  $output .= "<td>{$record["date"]}</td>"; 
  $output .= "</tr>";
    // $output .= "<tr>";
    // $output .= "<td>{$record["deadline"]}</td>";
    // $output .= "<td>{$record["todo"]}</td>";
    // edit deleteリンクを追加
    $output .= "<td>
  <a href='pati_edit.php?id={$record["id"]}'>edit</a>
  </td>";
  $output .= "<td>
  <a href='pati_delete.php?id={$record["id"]}'>delete</a>
  </td>"; 
  $output .= "</tr>";
  }
  // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  unset($record);
}

// 一覧画面に更新ページへ􏰀リンクを追加

// foreach ($result as $record) {
//   $output .= "<tr>";
//   $output .= "<td>{$record["deadline"]}</td>";
//   $output .= "<td>{$record["todo"]}</td>";
//   // edit deleteリンクを追加
//   $output .= "<td>
//   <a href='todo_edit.php?id={$record["id"]}'>edit</a>
//   </td>";
//   $output .= "<td>
//   <a href='todo_delete.php?id={$record["id"]}'>delete</a>
//   </td>"; 
//   $output .= "</tr>";
//   }

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>参加リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>参加者リスト一覧</legend>
    <a href="pati_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
        <th>participant</th>
                <th>nation</th>
                <th>price</th>
                <th>banquet</th>
                <th>hotel</th>
                <th>type</th>
                <th>date</th>
          <!-- <th>deadline</th>
          <th>todo</th> -->
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>