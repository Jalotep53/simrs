<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reg-periksa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_reg') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_registrasi') ?>

    <?= $form->field($model, 'jam_reg') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'no_rkm_medis') ?>

    <?php // echo $form->field($model, 'kd_poli') ?>

    <?php // echo $form->field($model, 'p_jawab') ?>

    <?php // echo $form->field($model, 'almt_pj') ?>

    <?php // echo $form->field($model, 'hubunganpj') ?>

    <?php // echo $form->field($model, 'biaya_reg') ?>

    <?php // echo $form->field($model, 'stts') ?>

    <?php // echo $form->field($model, 'stts_daftar') ?>

    <?php // echo $form->field($model, 'status_lanjut') ?>

    <?php // echo $form->field($model, 'kd_pj') ?>

    <?php // echo $form->field($model, 'umurdaftar') ?>

    <?php // echo $form->field($model, 'sttsumur') ?>

    <?php // echo $form->field($model, 'status_bayar') ?>

    <?php // echo $form->field($model, 'status_poli') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
