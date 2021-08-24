<?php
if(isset($_POST["login"])){
$username = $conn->real_escape_string($_POST["username"]);
$password = $conn->real_escape_string($_POST["password"]);

$usercheck = $conn->query("SELECT * FROM member WHERE username = '$username' AND password = '$password'");
if($usercheck->num_rows > 0){
$row = $usercheck->fetch_array();
$_SESSION['id'] = $row['id'];
$_SESSION['username'] = $row['username'];
$tokenlog = $row['token'];
$_SESSION["login"] = "success";
$_SESSION["swal"] = "notify";
$title ="เข้าสู่ระบบสำเร็จ";
$icon ="success";
$button = "ตกลง";
$link = "./?app=dashboard&token=$tokenlog";
}else{
    $_SESSION["swal"] = "notify";
    $title ="ชื่อหรือรหัสผ่าน!!";
    $text = "กรุณาลองใหม่อีกครั้ง";
    $icon ="error";
    $button = "ตกลง";
    $link = "./?app=login";
}
//print_r($_POST);
}
?>