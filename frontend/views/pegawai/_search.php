<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PegawaiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'jbtn') ?>

    <?php // echo $form->field($model, 'jnj_jabatan') ?>

    <?php // echo $form->field($model, 'kode_kelompok') ?>

    <?php // echo $form->field($model, 'kode_resiko') ?>

    <?php // echo $form->field($model, 'kode_emergency') ?>

    <?php // echo $form->field($model, 'departemen') ?>

    <?php // echo $form->field($model, 'bidang') ?>

    <?php // echo $form->field($model, 'stts_wp') ?>

    <?php // echo $form->field($model, 'stts_kerja') ?>

    <?php // echo $form->field($model, 'npwp') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <?php // echo $form->field($model, 'gapok') ?>

    <?php // echo $form->field($model, 'tmp_lahir') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kota') ?>

    <?php // echo $form->field($model, 'mulai_kerja') ?>

    <?php // echo $form->field($model, 'ms_kerja') ?>

    <?php // echo $form->field($model, 'indexins') ?>

    <?php // echo $form->field($model, 'bpd') ?>

    <?php // echo $form->field($model, 'rekening') ?>

    <?php // echo $form->field($model, 'stts_aktif') ?>

    <?php // echo $form->field($model, 'wajibmasuk') ?>

    <?php // echo $form->field($model, 'pengurang') ?>

    <?php // echo $form->field($model, 'indek') ?>

    <?php // echo $form->field($model, 'mulai_kontrak') ?>

    <?php // echo $form->field($model, 'cuti_diambil') ?>

    <?php // echo $form->field($model, 'dankes') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'no_ktp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
