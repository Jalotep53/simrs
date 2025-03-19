<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanGedung $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemeliharaan-gedung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pemeliharaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'uraian_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelaksana')->dropDownList([ 'Teknisi Rumah Sakit' => 'Teknisi Rumah Sakit', 'Pihak ke III' => 'Pihak ke III', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'jenis_pemeliharaan')->dropDownList([ 'Running Maintenance' => 'Running Maintenance', 'Shut Down Maintenance' => 'Shut Down Maintenance', 'Emergency Maintenance' => 'Emergency Maintenance', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tindak_lanjut')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
