<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanCuti $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengajuan-cuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'tanggal_awal')->textInput() ?>

    <?= $form->field($model, 'tanggal_akhir')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urgensi')->dropDownList([ 'Tahunan' => 'Tahunan', 'Besar' => 'Besar', 'Sakit' => 'Sakit', 'Bersalin' => 'Bersalin', 'Alasan Penting' => 'Alasan Penting', 'Keterangan Lainnya' => 'Keterangan Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'kepentingan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Proses Pengajuan' => 'Proses Pengajuan', 'Disetujui' => 'Disetujui', 'Ditolak' => 'Ditolak', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
