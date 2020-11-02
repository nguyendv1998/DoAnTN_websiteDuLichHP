<?php
    require_once 'connect.php';
     if ($_SERVER['REQUEST_METHOD']=='POST') {
        $key = $_POST['key'];
        $idbaiviet = $_POST['idbaiviet'];
    if(password_verify("dulichhaiphong", $key)){
        $sql = "SELECT anhlienquan.id, anhlienquan.Title, anhlienquan.File FROM baiviet
LEFT JOIN anhlienquan ON anhlienquan.BaiViet_id = baiviet.id
WHERE baiviet.id = $idbaiviet";
  class AnhLienQuan
    {
        
        function AnhLienQuan($id,$tenTitle,$file)
        {
            $this->Id = $id;
            $this->tenTitle=$tenTitle;
            $this->file=$file;
        }
    }
        $response = mysqli_query($conn, $sql);
        $result = array();
        $result['read'] = array();
        if($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                 array_push($result["read"], new AnhLienQuan($row['id'],$row['Title'],$row['File']));
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