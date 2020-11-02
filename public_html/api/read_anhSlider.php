<?php
   if ($_SERVER['REQUEST_METHOD']=='POST') {
    $key = $_POST['key'];
    $tenDanhMuc = $_POST['tenDanhMuc'];
    if(password_verify("dulichhaiphong", $key)){
        require_once 'connect.php';
        $sql = "SELECT * FROM sliders WHERE sliders.Title LIKE ('$tenDanhMuc%')";
        $response = mysqli_query($conn, $sql);
        $result = array();
        $result['read'] = array();
        if($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                 $h['tenFile']        = $row['File'] ;
                 array_push($result["read"], $h);
            }
            $result["success"] = "1";
                 echo json_encode($result);
                 mysqli_close($conn);
       }else{

         $result["success"] = "0";
         $result["message"] = "Error!";
         echo json_encode($result);
         mysqli_close($conn);
        }
    }
 }echo "Not load page";
 ?>