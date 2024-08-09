<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KamarInap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kamar-inap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trf_kamar')->textInput() ?>

    <?= $form->field($model, 'diagnosa_awal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_akhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_masuk')->textInput() ?>

    <?= $form->field($model, 'tgl_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_keluar')->textInput() ?>

    <?= $form->field($model, 'lama')->textInput() ?>

    <?= $form->field($model, 'ttl_biaya')->textInput() ?>

    <?= $form->field($model, 'stts_pulang')->dropDownList([ 'Sehat' => 'Sehat', 'Rujuk' => 'Rujuk', 'APS' => 'APS', '+' => '+', 'Meninggal' => 'Meninggal', 'Sembuh' => 'Sembuh', 'Membaik' => 'Membaik', 'Pulang Paksa' => 'Pulang Paksa', '-' => '-', 'Pindah Kamar' => 'Pindah Kamar', 'Status Belum Lengkap' => 'Status Belum Lengkap', 'Atas Persetujuan Dokter' => 'Atas Persetujuan Dokter', 'Atas Permintaan Sendiri' => 'Atas Permintaan Sendiri', 'Isoman' => 'Isoman', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
