$("#diadanh-quan_huyen").change(function () {
    id = $("#diadanh-quan_huyen").val();
    $.ajax({
        // url:'../backend/ajax/chinh-sua-danh-muc.php',
        url: "../backend/ajax/dropdown_xa_phuong.php?>",
        type:'POST',
        data:{x:id},
        success: function(data){
             $("#diadanh-xaphuong_id").html(data);
        }
    });
});