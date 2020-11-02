<?php
    require_once 'connect.php';
     if ($_SERVER['REQUEST_METHOD']=='POST') {
        $key = $_POST['key'];
        $idbaiviet = $_POST['idbaiviet'];
    if(password_verify("dulichhaiphong", $key)){
        $sql = "SELECT comment.id, user.TenNguoiDung, user.FilePhoto, comment.Create_at, comment.NoiDung FROM comment INNER JOIN user ON comment.User_id = user.id WHERE comment.BaiViet_id = 
        $idbaiviet";
  class Comment
    {
        
        function Comment($id,$tenNguoidung,$fileAnh, $ngayDang,$noiDung)
        {
            $this->Id = $id;
            $this->tenNguoidung=$tenNguoidung;
            $this->fileAnh = $fileAnh;
            $this->ngayDang=$ngayDang;
            $this->noiDung = $noiDung;
        }
    }
        $response = mysqli_query($conn, $sql);
        $result = array();
        $result['read'] = array();
        if($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                 array_push($result["read"], new Comment($row['id'],$row['TenNguoiDung'],$row['FilePhoto'],$row['Create_at'],$row['NoiDung']));
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