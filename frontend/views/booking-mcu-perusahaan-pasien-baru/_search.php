<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanPasienBaruSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-mcu-perusahaan-pasien-baru-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pengajuan') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?= $form->field($model, 'no_ktp') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'tmp_lahir') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'nm_ibu') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kelurahan') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'kabupaten') ?>

    <?php // echo $form->field($model, 'propinsi') ?>

    <?php // echo $form->field($model, 'gol_darah') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'stts_nikah') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'tgl_mcu') ?>

    <?php // echo $form->field($model, 'no_tlp') ?>

    <?php // echo $form->field($model, 'umur') ?>

    <?php // echo $form->field($model, 'pnd') ?>

    <?php // echo $form->field($model, 'keluarga') ?>

    <?php // echo $form->field($model, 'namakeluarga') ?>

    <?php // echo $form->field($model, 'pekerjaanpj') ?>

    <?php // echo $form->field($model, 'alamatpj') ?>

    <?php // echo $form->field($model, 'kelurahanpj') ?>

    <?php // echo $form->field($model, 'kecamatanpj') ?>

    <?php // echo $form->field($model, 'kabupatenpj') ?>

    <?php // echo $form->field($model, 'propinsipj') ?>

    <?php // echo $form->field($model, 'perusahaan_pasien') ?>

    <?php // echo $form->field($model, 'suku_bangsa') ?>

    <?php // echo $form->field($model, 'bahasa_pasien') ?>

    <?php // echo $form->field($model, 'cacat_fisik') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
