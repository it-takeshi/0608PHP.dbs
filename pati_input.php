<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>参加者データ入力</title>
  <style>
.form{
    padding-left: 50px; 
  }

  body{
    background: url(img/city.webp);
    background-repeat: no-repeat;  
   /* 画像を常に中央に配置 */
  background-position: center center;
/* コンテンツの高さが画像の高さより大きい時、動かないように固定 */
  background-attachment: fixed;
  background-size: cover;
    
  
  } 
  </style>
</head>

<body>


<div class="form">
  <form action ="pati_create.php" method="POST">
    
      
<h1>大会参加登録</h1>

      <a href="pati_read.php">参加者一覧</a>
      <div>
        participant(参加者): <input type="text" name="participant">
      </div>
      <div>
        nation(国籍): <input type="text" name="nation">
      </div>
      <div>
        price(参加費): <input type="number" name="price">
      </div>
      <div>
        banquet(懇親会): <input type="text" name="banquet">
      </div>
      <div>
        hotel(ホテル): <input type="text" name="hotel">
      </div>
      <div>
        type(部屋タイプ): <input type="text" name="type">
      </div>
      <div>
        date(日時): <input type="date" name="date">
      </div>
      <div>
        <button>submit</button>
      </div>
    
  </form>
  </div>

</body>

</html>
<!-- 
<form action="todo_create.php" method="POST">
    <fieldset>
      <legend>DB連携型todoリスト（入力画面）</legend>
      <a href="todo_read.php">一覧ホテル画面</a>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form> -->