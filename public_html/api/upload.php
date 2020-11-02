<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $photo = $_POST['photo'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
    $path = "profile_image/$id.jpeg";
    $finalPath = "http://dulichhaiphong.xyz/api/".$path;

    require_once 'connect.php';

    $sql = "UPDATE user SET FilePhoto='$finalPath' WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        
        if ( file_put_contents( $path, base64_decode($photo) ) ) {
            
            $result['success'] = "1";
            $result['message'] = "success";

            echo json_encode($result);
            mysqli_close($conn);

        }

    }

}
}echo "Not load page";
?>