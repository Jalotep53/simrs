<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiaya $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengajuan-biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urgensi')->dropDownList([ 'Cito' => 'Cito', 'Emergensi' => 'Emergensi', 'Biasa' => 'Biasa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'uraian_latar_belakang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target_sasaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Proses Pengajuan' => 'Proses Pengajuan', 'Disetujui' => 'Disetujui', 'Ditolak' => 'Ditolak', 'Divalidasi' => 'Divalidasi', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
