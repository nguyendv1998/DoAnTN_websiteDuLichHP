<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $iduser = $_POST['idUser'];
    $idbaiviet = $_POST['idBaiviet'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
        require_once 'connect.php';
        $sql = "SELECT COUNT(likes.BaiViet_id) AS checklike FROM likes
WHERE likes.BaiViet_id = $idbaiviet AND likes.User_id = $iduser";
        if ( mysqli_query($conn, $sql) ) {
            while ($row = mysqli_fetch_assoc(mysqli_query($conn, $sql))){
             $result["success"] = $row['checklike'];
             echo json_encode($result);
             mysqli_close($conn);   
            }

        } else {
            $result["success"] = "0";
            echo json_encode($result);
            mysqli_close($conn);
        }
    }
}echo "Not load page"
?>