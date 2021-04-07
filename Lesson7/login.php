<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
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
                <div class="navbar-header"><a class="navbar-brand">Login</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="login_act.php">
        <div class="jumbotron">
            <fieldset>
                <legend>フリーアンケート</legend>
                <label>ID：<input type="text" name="lid"></label><br>
                <label>PW：<input type="text" name="lpw"></label><br>
                <input type="checkbox" name="kanri_flg" value="1">管理者
                <input type="checkbox" name="kanri_flg" value="0">スタッフ
                <input type="submit" value="ログイン">
            </fieldset>
        </div>
    </form>
</body>

</html>