<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPemeriksaanRadiologi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-pemeriksaan-radiologi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noorder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_bayar')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
