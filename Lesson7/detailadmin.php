<?php

//１．PHP
//select.phpのPHP部分コードをマルっとコピーしてきます。
//※SQLとデータ取得の箇所を修正、GETの内容をSELECTする！
require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];


//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id=' . $id . ';');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($status);
} else {
    $result = $stmt->fetch(); 
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: bisque;
        }
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="selectadmin.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>好きな本をブックマークする</legend>
                <label>書籍名：<input type="text" name="bookname" value="<?= $result['bookname'] ?>"></label><br>
                <label>書籍URL：<input type="text" name="bookURL" value="<?= $result['bookURL'] ?>"></label><br>
                <label>書籍コメント：<textarea name="naiyou" rows="4" cols="40"><?= $result['naiyou'] ?></textarea></label><br>
                <!-- ↓追加 -->
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>
</html>