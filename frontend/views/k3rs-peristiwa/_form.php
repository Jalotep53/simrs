<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPeristiwa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-peristiwa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_k3rs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_insiden')->textInput() ?>

    <?= $form->field($model, 'waktu_insiden')->textInput() ?>

    <?= $form->field($model, 'kode_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pelaporan')->textInput() ?>

    <?= $form->field($model, 'waktu_pelaporan')->textInput() ?>

    <?= $form->field($model, 'kode_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kronologi_kejadian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_penyebab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_cidera')->dropDownList([ 'Ringan' => 'Ringan', 'Sedang' => 'Sedang', 'Berat' => 'Berat', 'Fatal' => 'Fatal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_cidera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_luka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_bagian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lt')->textInput() ?>

    <?= $form->field($model, 'penyebab_langsung_kondisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyebab_langsung_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyebab_tidak_langsung_pribadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyebab_tidak_langsung_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barang_bukti')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_dampak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_pelapor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perbaikan_jenis_tindakan')->dropDownList([ 'Tindakan Perbaikan' => 'Tindakan Perbaikan', 'Tindakan Pencegahan' => 'Tindakan Pencegahan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'perbaikan_rencana_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perbaikan_target')->textInput() ?>

    <?= $form->field($model, 'perbaikan_wewenang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_timk3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
