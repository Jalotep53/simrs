<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreInduksiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pre-induksi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'tensi') ?>

    <?= $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'ekg') ?>

    <?php // echo $form->field($model, 'lain_lain') ?>

    <?php // echo $form->field($model, 'asesmen') ?>

    <?php // echo $form->field($model, 'perencanaan') ?>

    <?php // echo $form->field($model, 'infus_perifier') ?>

    <?php // echo $form->field($model, 'cvc') ?>

    <?php // echo $form->field($model, 'posisi') ?>

    <?php // echo $form->field($model, 'premedikasi') ?>

    <?php // echo $form->field($model, 'premedikasi_keterangan') ?>

    <?php // echo $form->field($model, 'induksi') ?>

    <?php // echo $form->field($model, 'induksi_keterangan') ?>

    <?php // echo $form->field($model, 'face_mask_no') ?>

    <?php // echo $form->field($model, 'nasopharing_no') ?>

    <?php // echo $form->field($model, 'ett_no') ?>

    <?php // echo $form->field($model, 'ett_jenis') ?>

    <?php // echo $form->field($model, 'ett_viksasi') ?>

    <?php // echo $form->field($model, 'lma_no') ?>

    <?php // echo $form->field($model, 'lma_jenis') ?>

    <?php // echo $form->field($model, 'tracheostomi') ?>

    <?php // echo $form->field($model, 'bronchoscopi_fiberoptik') ?>

    <?php // echo $form->field($model, 'glidescopi') ?>

    <?php // echo $form->field($model, 'lain_lain_tatalaksana') ?>

    <?php // echo $form->field($model, 'intubasi_sesudah_tidur') ?>

    <?php // echo $form->field($model, 'intubasi_oral') ?>

    <?php // echo $form->field($model, 'intubasi_tracheostomi') ?>

    <?php // echo $form->field($model, 'intubasi_keterangan') ?>

    <?php // echo $form->field($model, 'sulit_ventilasi') ?>

    <?php // echo $form->field($model, 'sulit_intubasi') ?>

    <?php // echo $form->field($model, 'ventilasi') ?>

    <?php // echo $form->field($model, 'teknik_regional_jenis') ?>

    <?php // echo $form->field($model, 'teknik_regional_lokasi') ?>

    <?php // echo $form->field($model, 'teknik_regional_jenis_jarum') ?>

    <?php // echo $form->field($model, 'teknik_regional_kateter') ?>

    <?php // echo $form->field($model, 'teknik_regional_kateter_viksasi') ?>

    <?php // echo $form->field($model, 'teknik_regional_obat_obatan') ?>

    <?php // echo $form->field($model, 'teknik_regional_komplikasi') ?>

    <?php // echo $form->field($model, 'teknik_regional_hasil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
