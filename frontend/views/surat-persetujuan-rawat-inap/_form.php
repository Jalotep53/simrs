<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-persetujuan-rawat-inap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan_pj')->dropDownList([ 'TS' => 'TS', 'TK' => 'TK', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'SLTA/SEDERAJAT' => 'SLTA/SEDERAJAT', 'D1' => 'D1', 'D2' => 'D2', 'D3' => 'D3', 'D4' => 'D4', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamatpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->dropDownList([ 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Ibu' => 'Ibu', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', 'Diri Saya' => 'Diri Saya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hak_kelas')->dropDownList([ 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_alamat_keluarga_terdekat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bayar_secara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
