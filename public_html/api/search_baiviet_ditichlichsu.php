<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    require_once 'connect.php';
    $TenCapCongNhan = $_POST['tenCapCongNhan'];
    $TenLoaiDiTich = $_POST['tenLoaiDiTich'];
    $TenQuanHuyen = $_POST['tenQuanHuyen'];
    $key = $_POST['key'];
    if(password_verify("dulichhaiphong", $key)){
       class BaiVietChua
    {
        
        function BaiVietChua($id,$tenbaiviet,$tomtat,$anhdaidien,$solike,$ngaydang,$noidung)
        {
            $this->Id = $id;
            $this->TenBaiViet=$tenbaiviet;
            $this->TomTat=$tomtat;
            $this->AnhDaiDien=$anhdaidien;
            $this->SoLike = $solike;
            $this->NgayDang = $ngaydang;
            $this->Noidung = $noidung;
        }
    }
    $sql = "SELECT baiviet.id, baiviet.TenBaiViet, baiviet.TomTat, (select COUNT(*) from likes where likes.BaiViet_id=baiviet.id) as SoLike, baiviet.ThoiGianDang, baiviet.AnhDaiDien, baiviet.NoiDung FROM baiviet 
    inner join baivietdanhmuc on baiviet.id = baivietdanhmuc.BaiViet_id 
    inner join danhmuc on danhmuc.id=baivietdanhmuc.DanhMuc_id 
    LEFT JOIN diadanh on baiviet.DiaDanh_id=diadanh.id 
    LEFT join quanhuyen on diadanh.QuanHuyen_id= quanhuyen.id 
    LEFT join capcongnhan on diadanh.CapCongNhan_id = capcongnhan.id 
    LEFT join loaiditich on diadanh.LoaiDiTich_id= loaiditich.id 
    WHERE danhmuc.id = 32
    AND capcongnhan.TenCapCongNhan LIKE '%$TenCapCongNhan%' 
    AND loaiditich.TenLoaiDiTich LIKE '%$TenLoaiDiTich%' 
    AND quanhuyen.TenQuanHuyen LIKE '%$TenQuanHuyen%'
    AND baiviet.XuatBan = 1";
    $response = mysqli_query($conn, $sql);
    $result = array();
    $result['baiviet'] = array();
    if($response) {
        while ($row = mysqli_fetch_assoc($response)) {
             array_push($result["baiviet"], new BaiVietChua($row["id"],$row["TenBaiViet"],$row["TomTat"],$row["AnhDaiDien"],$row["SoLike"],$row["ThoiGianDang"],$row['NoiDung']));
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

