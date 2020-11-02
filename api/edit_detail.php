<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $account = $_POST['account'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $sodienthoai = $_POST['sodienthoai'];
    $id = $_POST['id'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
    require_once 'connect.php';

    $sql = "UPDATE user SET username='$account', Email='$email',SoDienThoai='$sodienthoai',TenNguoiDung ='$name' WHERE id='$id' ";

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