<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $account = $_POST['account'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
    require_once 'connect.php';

    $sql = "SELECT * FROM user WHERE username ='$account'";

    $response = mysqli_query($conn, $sql);

    $result = array();
    if ( mysqli_num_rows($response) === 1 ) {
          
            $row = mysqli_fetch_assoc($response);
            $result['id'] = $row['id'];
            $result['success'] = "1";
            $result['message'] = "success";
            echo json_encode($result);
            mysqli_close($conn);

    }else{
        $result['success'] = "0";
        $result['message'] = "Khongtontai";
        echo json_encode($result);
        mysqli_close($conn);
    }

}
}echo "Not load page";

?>