<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienCoronaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-corona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pengenal') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'inisial') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'tgl_masuk') ?>

    <?php // echo $form->field($model, 'kode_jk') ?>

    <?php // echo $form->field($model, 'nama_jk') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'kode_kewarganegaraan') ?>

    <?php // echo $form->field($model, 'nama_kewarganegaraan') ?>

    <?php // echo $form->field($model, 'kode_penularan') ?>

    <?php // echo $form->field($model, 'sumber_penularan') ?>

    <?php // echo $form->field($model, 'kd_kelurahan') ?>

    <?php // echo $form->field($model, 'nm_kelurahan') ?>

    <?php // echo $form->field($model, 'kd_kecamatan') ?>

    <?php // echo $form->field($model, 'nm_kecamatan') ?>

    <?php // echo $form->field($model, 'kd_kabupaten') ?>

    <?php // echo $form->field($model, 'nm_kabupaten') ?>

    <?php // echo $form->field($model, 'kd_propinsi') ?>

    <?php // echo $form->field($model, 'nm_propinsi') ?>

    <?php // echo $form->field($model, 'tgl_keluar') ?>

    <?php // echo $form->field($model, 'kode_statuskeluar') ?>

    <?php // echo $form->field($model, 'nama_statuskeluar') ?>

    <?php // echo $form->field($model, 'tgl_lapor') ?>

    <?php // echo $form->field($model, 'kode_statusrawat') ?>

    <?php // echo $form->field($model, 'nama_statusrawat') ?>

    <?php // echo $form->field($model, 'kode_statusisolasi') ?>

    <?php // echo $form->field($model, 'nama_statusisolasi') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'notelp') ?>

    <?php // echo $form->field($model, 'sebab_kematian') ?>

    <?php // echo $form->field($model, 'kode_jenis_pasien') ?>

    <?php // echo $form->field($model, 'nama_jenis_pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
