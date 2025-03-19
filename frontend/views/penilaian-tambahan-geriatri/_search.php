<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTambahanGeriatriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-tambahan-geriatri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'asal_masuk') ?>

    <?= $form->field($model, 'kondisi_masuk') ?>

    <?php // echo $form->field($model, 'keterangan_kondisi_masuk') ?>

    <?php // echo $form->field($model, 'anamnesis') ?>

    <?php // echo $form->field($model, 'diagnosa_medis') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_telinga') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_sinus') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_antibiotik') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_pneumonia') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_abses') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_sariawan') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_memerlukan_antibiotik') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_infeksi_dalam') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_immunodefisiensi_primer') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_jenis_kangker') ?>

    <?php // echo $form->field($model, 'riwayat_immuno_infeksi_oportunistik') ?>

    <?php // echo $form->field($model, 'pola_aktifitas_tidur') ?>

    <?php // echo $form->field($model, 'keterangan_pola_aktifitas_tidur') ?>

    <?php // echo $form->field($model, 'pola_aktifitas_obat_tidur') ?>

    <?php // echo $form->field($model, 'keterangan_pola_aktifitas_obat_tidur') ?>

    <?php // echo $form->field($model, 'pola_aktifitas_olahraga') ?>

    <?php // echo $form->field($model, 'keterangan_pola_aktifitas_olahraga') ?>

    <?php // echo $form->field($model, 'kualitas_hidup_mobilitas') ?>

    <?php // echo $form->field($model, 'kualitas_hidup_perawatan_diri') ?>

    <?php // echo $form->field($model, 'kualitas_hidup_aktifitas_seharihari') ?>

    <?php // echo $form->field($model, 'kualitas_hidup_rasa_nyeri') ?>

    <?php // echo $form->field($model, 'skala_nyeri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
