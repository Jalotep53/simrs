<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerbaikanInventaris $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perbaikan-inventaris-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_permintaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'uraian_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelaksana')->dropDownList([ 'Teknisi Rumah Sakit' => 'Teknisi Rumah Sakit', 'Teknisi Rujukan' => 'Teknisi Rujukan', 'Pihak ke III' => 'Pihak ke III', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Bisa Diperbaiki' => 'Bisa Diperbaiki', 'Tidak Bisa Diperbaiki' => 'Tidak Bisa Diperbaiki', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
