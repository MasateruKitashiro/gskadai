<?php
require_once('funcs.php');
session_start();
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="selectadmin.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>好きな本をブックマークする</legend>
                <label>書籍名：<input type="text" name="bookname"></label><br>
                <label>書籍URL：<input type="text" name="bookURL"></label><br>
                <label>書籍コメント：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
            <a href="select.php">書き込みデータを確認</a>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
