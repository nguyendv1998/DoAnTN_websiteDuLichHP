<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TuKhoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tu-khoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenTuKhoa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
