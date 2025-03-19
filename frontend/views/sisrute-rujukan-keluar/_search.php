<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SisruteRujukanKeluarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sisrute-rujukan-keluar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'no_rujuk') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?= $form->field($model, 'no_ktp') ?>

    <?php // echo $form->field($model, 'no_peserta') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'tmp_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_tlp') ?>

    <?php // echo $form->field($model, 'jns_rujukan') ?>

    <?php // echo $form->field($model, 'tgl_rujuk') ?>

    <?php // echo $form->field($model, 'kd_faskes_tujuan') ?>

    <?php // echo $form->field($model, 'nm_faskes_tujuan') ?>

    <?php // echo $form->field($model, 'kd_alasan') ?>

    <?php // echo $form->field($model, 'alasan_rujuk') ?>

    <?php // echo $form->field($model, 'alasan_lainnya') ?>

    <?php // echo $form->field($model, 'kd_diagnosa') ?>

    <?php // echo $form->field($model, 'diagnosa_rujuk') ?>

    <?php // echo $form->field($model, 'nik_dokter') ?>

    <?php // echo $form->field($model, 'dokter_perujuk') ?>

    <?php // echo $form->field($model, 'nik_petugas') ?>

    <?php // echo $form->field($model, 'petugas_entry') ?>

    <?php // echo $form->field($model, 'anamnesis_pemeriksaan') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'tekanan_darah') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'respirasi') ?>

    <?php // echo $form->field($model, 'keadaan_umum') ?>

    <?php // echo $form->field($model, 'tingkat_nyeri') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'laboratorium') ?>

    <?php // echo $form->field($model, 'radiologi') ?>

    <?php // echo $form->field($model, 'terapitindakan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
