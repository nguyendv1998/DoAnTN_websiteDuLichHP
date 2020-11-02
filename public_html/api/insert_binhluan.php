<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $iduser = $_POST['idUser'];
    $idbaiviet = $_POST['idBaiviet'];
    $binhluan = $_POST['binhluan'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
        require_once 'connect.php';
        $sql = "INSERT INTO comment (NoiDung, User_id, BaiViet_id,Create_at) VALUES ('$binhluan', $iduser, $idbaiviet,now())";
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
}echo "Not load page";
?>