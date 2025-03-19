<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DeteksiDiniCoronaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="deteksi-dini-corona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'gejala_demam') ?>

    <?= $form->field($model, 'gejala_batuk') ?>

    <?php // echo $form->field($model, 'gejala_sesak') ?>

    <?php // echo $form->field($model, 'gejala_tanggal_pertama') ?>

    <?php // echo $form->field($model, 'gejala_riwayat_sakit') ?>

    <?php // echo $form->field($model, 'gejala_riwayat_periksa') ?>

    <?php // echo $form->field($model, 'faktor_riwayat_perjalanan') ?>

    <?php // echo $form->field($model, 'faktor_asal_daerah') ?>

    <?php // echo $form->field($model, 'faktor_tanggal_kedatangan') ?>

    <?php // echo $form->field($model, 'faktor_paparan_kontakpositif') ?>

    <?php // echo $form->field($model, 'faktor_paparan_kontakpdp') ?>

    <?php // echo $form->field($model, 'faktor_paparan_faskespositif') ?>

    <?php // echo $form->field($model, 'faktor_paparan_perjalananln') ?>

    <?php // echo $form->field($model, 'faktor_paparan_pasarhewan') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <?php // echo $form->field($model, 'tindak_lanjut') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
