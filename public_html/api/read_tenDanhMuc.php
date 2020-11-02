<?php
    require_once 'connect.php';
     if ($_SERVER['REQUEST_METHOD']=='POST') {
        $key = $_POST['key'];
        $idDM = $_POST['idDM'];
    if(password_verify("dulichhaiphong", $key)){
          class DanhMuc
        {
            
            function DanhMuc($id,$tenDanhMuc)
            {
                $this->Id = $id;
                $this->TenDanhMuc=$tenDanhMuc;
            }
        }
        $sql = "SELECT danhmuc.id, danhmuc.TenDanhMuc FROM danhmuc
WHERE danhmuc.DanhMucCha_id = $idDM";
        $response = mysqli_query($conn, $sql);
        $result = array();
        $result['read'] = array();
        if($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                 array_push($result["read"], new DanhMuc($row['id'],$row['TenDanhMuc']));
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