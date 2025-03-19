<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenghargaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-penghargaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_penghargaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pejabat_pemberi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
