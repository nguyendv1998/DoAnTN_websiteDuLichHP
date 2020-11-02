<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TuKhoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Từ khóa';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    function ajax_click_render(id)
    {
        document.getElementById('input_tu_khoa').value="";
        document.getElementById('hidden_input').value="-1";
        document.getElementById('exampleModalLabel').innerHTML="Chỉnh sửa từ khóa";
        $.ajax({
            url:'../backend/ajax/chinh-sua-tu-khoa.php',
            type:'POST',
            data:{x:id},
            success: function(data){
                var res=data.split("|");
                document.getElementById('hidden_input').value=res[0];
                document.getElementById('input_tu_khoa').value=res[1];
            }
        });
    }
    function resetdata()
    {
        document.getElementById('input_tu_khoa').value="";
        document.getElementById('hidden_input').value="-1";
        document.getElementById('exampleModalLabel').innerHTML="Thêm từ khóa";
    }
</script>
<div class="container">
    <div class="tu-khoa-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>

            <!-- Button trigger modal -->
            <button type="button" onclick="resetdata()" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="glyphicon-plus glyphicon"> </i> Thêm từ khóa
            </button>
        </p>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Thêm từ khóa</h4>
                    </div>
                    <form action="<?=\yii\helpers\Url::toRoute('tu-khoa/them-tu-khoa')?>" method="post">
                        <div class="modal-body">
                            <label for="">Từ khóa</label><input id="input_tu_khoa" required placeholder="Mỗi từ khóa có thể cách nhau bởi dấu phẩy" autocomplete="off" class="form-control" type="text" name="tukhoas">
                            <input type="hidden" name="hidden_input" hidden id="hidden_input">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'TenTuKhoa',
                [
                    'header'=>'Chỉnh sửa',
                    'headerOptions'=>['class'=>'text-center text-primary','style'=>['width'=>'5%']],
                    'value'=>function($data)
                    {
                        /** @var  $data \common\models\DanhMuc */
                        return "<a href='#' onclick='ajax_click_render($data->id)' id='$data->id' class='data_target glyphicon-pencil glyphicon' data-toggle='modal' data-target='#exampleModal'></a>";
                    },
                    'format'=>'raw',
                    'contentOptions'=>['class'=>'text-center']
                ],
                [
                    'header'=>'Xóa',
                    'headerOptions'=>['class'=>'text-center text-primary','style'=>['width'=>'5%']],
                    'value'=>function($data)
                    {
                        return Html::a('<span style="color: red" title="Xóa"><i class="glyphicon glyphicon-trash"></i></span>', \yii\helpers\Url::toRoute(['tu-khoa/delete','id'=>$data->id]),
                            [
                                'data' => ['confirm' => 'Bạn có chắc chắn muốn xóa không?', 'method' => 'post']
                            ]);
                    },
                    'contentOptions'=>['class'=>'text-center'],
                    'format'=>'raw'
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
