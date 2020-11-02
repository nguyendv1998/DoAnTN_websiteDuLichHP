<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $password = $_POST['password'];
    $id = $_POST['id'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
    require_once 'connect.php';

    $sql = "UPDATE user SET password_hash='$password' WHERE id='$id' ";

  if(mysqli_query($conn, $sql)) {

          $result["success"] = "1";
          $result["message"] = "success";

          echo json_encode($result);
          mysqli_close($conn);
  }else{
   $result["success"] = "0";
   $result["message"] = "error!";
   echo json_encode($result);
   mysqli_close($conn);
 }
}
}echo "Not load page";
?>