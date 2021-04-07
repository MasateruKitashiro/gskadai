<?php
//1. POSTデータ取得
$bookname = $_POST['bookname'];
$bookURL = $_POST['bookURL'];
$naiyou = $_POST['naiyou'];


//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO 
                      gs_bm_table ( id, bookname, bookURL, naiyou, indate )
                      VALUES( NULL, :a1, :a2, :a3, sysdate() )"
                      ); 

//  2. バインド変数を用意
$stmt->bindValue(':a1', $bookname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $bookURL, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
  //*** function化する！******\
  sql_error($stmt);
} else {
  //*** function化する！*****************
  redirect('index.php');
}
?>
