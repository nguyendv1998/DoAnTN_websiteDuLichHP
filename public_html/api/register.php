<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $name = $_POST['name'];
    $account = $_POST['account'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
    require_once 'connect.php';
    $sql = "SELECT * FROM user";
    $arrayTenAccount = array();
    $result = array();
    $data = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayTenAccount,$row["username"]);
    }
     if(in_array($account, $arrayTenAccount)){
        $result["success"] = "0";
        $result["message"] = "trungtaikhoan";
        echo json_encode($result);
        mysqli_close($conn);
    }else{
        $sql = "INSERT INTO user (username, Email, password_hash,TenNguoiDung,status,FilePhoto) VALUES ('$account', '$email', '$password', '$name',10,'http://dulichhaiphong.xyz/api/profile_image/ic_person.png')";

        if ( mysqli_query($conn, $sql) ) {
            $result["success"] = "1";
            $result["message"] = "success";
            echo json_encode($result);
            mysqli_close($conn);

        } else {
            $result["success"] = "0";
            $result["message"] = "error";
            echo json_encode($result);
            mysqli_close($conn);
        }
    }
}
}echo "Not load page";
?>