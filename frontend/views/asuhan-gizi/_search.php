<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AsuhanGiziSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="asuhan-gizi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'antropometri_bb') ?>

    <?= $form->field($model, 'antropometri_tb') ?>

    <?= $form->field($model, 'antropometri_imt') ?>

    <?php // echo $form->field($model, 'antropometri_lla') ?>

    <?php // echo $form->field($model, 'antropometri_tl') ?>

    <?php // echo $form->field($model, 'antropometri_ulna') ?>

    <?php // echo $form->field($model, 'antropometri_bbideal') ?>

    <?php // echo $form->field($model, 'antropometri_bbperu') ?>

    <?php // echo $form->field($model, 'antropometri_tbperu') ?>

    <?php // echo $form->field($model, 'antropometri_bbpertb') ?>

    <?php // echo $form->field($model, 'antropometri_llaperu') ?>

    <?php // echo $form->field($model, 'biokimia') ?>

    <?php // echo $form->field($model, 'fisik_klinis') ?>

    <?php // echo $form->field($model, 'alergi_telur') ?>

    <?php // echo $form->field($model, 'alergi_susu_sapi') ?>

    <?php // echo $form->field($model, 'alergi_kacang') ?>

    <?php // echo $form->field($model, 'alergi_gluten') ?>

    <?php // echo $form->field($model, 'alergi_udang') ?>

    <?php // echo $form->field($model, 'alergi_ikan') ?>

    <?php // echo $form->field($model, 'alergi_hazelnut') ?>

    <?php // echo $form->field($model, 'pola_makan') ?>

    <?php // echo $form->field($model, 'riwayat_personal') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'intervensi_gizi') ?>

    <?php // echo $form->field($model, 'monitoring_evaluasi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
