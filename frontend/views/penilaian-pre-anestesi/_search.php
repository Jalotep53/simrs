<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreAnestesiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pre-anestesi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'tanggal_operasi') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'rencana_tindakan') ?>

    <?php // echo $form->field($model, 'tb') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'io2') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'pernapasan') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'fisik_cardiovasculer') ?>

    <?php // echo $form->field($model, 'fisik_paru') ?>

    <?php // echo $form->field($model, 'fisik_abdomen') ?>

    <?php // echo $form->field($model, 'fisik_extrimitas') ?>

    <?php // echo $form->field($model, 'fisik_endokrin') ?>

    <?php // echo $form->field($model, 'fisik_ginjal') ?>

    <?php // echo $form->field($model, 'fisik_obatobatan') ?>

    <?php // echo $form->field($model, 'fisik_laborat') ?>

    <?php // echo $form->field($model, 'fisik_penunjang') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_alergiobat') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_alergilainnya') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_terapi') ?>

    <?php // echo $form->field($model, 'riwayat_kebiasaan_merokok') ?>

    <?php // echo $form->field($model, 'riwayat_kebiasaan_ket_merokok') ?>

    <?php // echo $form->field($model, 'riwayat_kebiasaan_alkohol') ?>

    <?php // echo $form->field($model, 'riwayat_kebiasaan_ket_alkohol') ?>

    <?php // echo $form->field($model, 'riwayat_kebiasaan_obat') ?>

    <?php // echo $form->field($model, 'riwayat_kebiasaan_ket_obat') ?>

    <?php // echo $form->field($model, 'riwayat_medis_cardiovasculer') ?>

    <?php // echo $form->field($model, 'riwayat_medis_respiratory') ?>

    <?php // echo $form->field($model, 'riwayat_medis_endocrine') ?>

    <?php // echo $form->field($model, 'riwayat_medis_lainnya') ?>

    <?php // echo $form->field($model, 'asa') ?>

    <?php // echo $form->field($model, 'puasa') ?>

    <?php // echo $form->field($model, 'rencana_anestesi') ?>

    <?php // echo $form->field($model, 'rencana_perawatan') ?>

    <?php // echo $form->field($model, 'catatan_khusus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
