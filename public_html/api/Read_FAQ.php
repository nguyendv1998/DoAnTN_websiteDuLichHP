<?php
    require_once 'connect.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
        $sql = "SELECT * FROM faq";
          class FAQ
        {
            
            function FAQ($id,$tenCauhoi,$cauTraLoi)
            {
                $this->Id = $id;
                $this->tenCauhoi=$tenCauhoi;
                $this->cauTraLoi=$cauTraLoi;
            }
        }
        $response = mysqli_query($conn, $sql);
        $result = array();
        $result['read'] = array();
        if($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                 array_push($result["read"], new FAQ($row['id'],$row['TenCauHoi'],$row['NoiDungTraLoi']));
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
    
 }else
    echo "Not load page";
 ?>