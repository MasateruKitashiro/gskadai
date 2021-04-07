<?php
//1. POSTデータ取得
session_start();
$lid   = $_POST['lid'];
$lpw  = $_POST['lpw'];
$kanri_flg  = $_POST['kanri_flg'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$sql = "SELECT * FROM gs_user_table WHERE u_id = :lid AND u_pw = :lpw";
$stmt = $pdo->prepare($sql);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$res = $stmt->execute(); //実行

//４．データ登録処理後
if ($res == false) {
    sql_error($stmt);
} 

$val = $stmt->fetch();

if($val['kanri_flg'] != $kanri_flg){
    redirect('login.php');
}

if( $val['id'] != '' ){
    if($kanri_flg == 1){
        $_SESSION['chk_ssid']  = session_id();
        $_SESSION['u_name'] = $val['u_name'];
        redirect('selectadmin.php');
    }else if($kanri_flg == 0){
        $_SESSION['chk_ssid']  = session_id();
        $_SESSION['u_name'] = $val['u_name'];
        redirect('selectstaff.php');
    }
}else {
    redirect('login.php');
}

exit();





// //３．データ登録SQL作成
// $stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,age,content,indate)VALUES(:name,:email,:age,:content,sysdate())");

// // 数値の場合 PDO::PARAM_INT
// // 文字の場合 PDO::PARAM_STR
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->bindValue(':email', $email, PDO::PARAM_STR);
// $stmt->bindValue(':age', $age, PDO::PARAM_INT);
// $stmt->bindValue(':content', $content, PDO::PARAM_STR);
// $status = $stmt->execute(); //実行

// //４．データ登録処理後
// if ($status == false) {
//     //*** function化する！******\
//     sql_error($stmt);
//     // $error = $stmt->errorInfo();
//     // exit("SQLError:" . print_r($error, true));
// } else {
//     //*** function化する！*****************
//     redirect('index.php');
//     // header("Location: index.php");
//     // exit();
// }