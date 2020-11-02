
<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $id = $_POST['id'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
    require_once 'connect.php';

    $sql = "SELECT * FROM user WHERE id='$id' ";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['read'] = array();

    if( mysqli_num_rows($response) === 1 ) {
        
        if ($row = mysqli_fetch_assoc($response)) {
 
             $h['name']        = $row['TenNguoiDung'] ;
             $h['account']        = $row['username'] ;
             $h['email']       = $row['Email'] ;
             $h['image']       = $row['FilePhoto'];
             $h['sodienthoai'] = $row['SoDienThoai'];
             array_push($result["read"], $h);

             $result["success"] = "1";
             echo json_encode($result);
        }
 
   }
 
 }else {
 
     $result["success"] = "0";
     $result["message"] = "Error!";
     echo json_encode($result);
 
     mysqli_close($conn);
 }
 }echo "Not load page";
 ?>