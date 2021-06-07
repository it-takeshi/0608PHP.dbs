<?php


$id = $_GET['id'];
// $participant =$_POST['participant'];
// $nation =$_POST['nation'];
// $price =$_POST['price'];
// $banquet =$_POST['banquet'];
// $hotel=$_POST['hotel'];
// $type =$_POST['type'];
// $date =$_POST['date'];

include("functions.php");
$pdo= connect_to_db();

// DB接続&id名でテーブルから検索   // 該当􏰀データを取得するためidでDBを検索する!
// $pdo= connect_to_db();
$sql = 'SELECT * FROM participant_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

 // fetch()で1レコード取得できる.
if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]); 
  exit();
  } else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
  }


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>参加者データ更新・編集</title>
</head>

<body>
  <form action="pati_update.php" method="POST">
    <fieldset>
      <legend>参加者データ更新・編集</legend>
      <a href="pati_read.php">一覧画面</a>
      <!-- htmlのタグに初期値として設定 -->
      <div>
        participant(参加者): <input type="text" name="participant" value="<?= $record['participant'] ?>">
      </div>
      <div>
        nation(国籍): <input type="text" name="nation" value="<?= $record['nation'] ?>" >
      </div>
      <div>
        price(参加費): <input type="number" name="price" value="<?= $record['price'] ?>" >
      </div>
      <div>
        banquet(懇親会): <input type="text" name="banquet" value="<?= $record['banquet'] ?>" >
      </div>
      <div>
        hotel(ホテル): <input type="text" name="hotel" value="<?= $record['hotel'] ?>">
      </div>
      <div>
        type(部屋タイプ): <input type="text" name="type" value="<?= $record['type'] ?>" >
      </div>
      <div>
        date(日時): <input type="date" name="date" value="<?= $record['date'] ?>" >
      </div>

      <div>
      <!-- idを見えないように送る -->
      <!-- input type="hidden"を使用する! -->
      <input type="hidden" name="id" value="<?=$record['id']?>">
      </div>
      <div>
        <button>submit</button>
      </div>

    </fieldset>
  </form>

</body>

</html>

 <!-- <div>
        todo: <input type="text" name="todo" value="<?= $record['todo'] ?>">
      </div> -->


      <!-- <div>
        deadline:<input type="date" name="deadline" value="<?= $record['deadline'] ?>">
      </div> -->