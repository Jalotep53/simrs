<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLabSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-periksa-lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'tgl_periksa') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'id_template') ?>

    <?php // echo $form->field($model, 'nilai') ?>

    <?php // echo $form->field($model, 'nilai_rujukan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'bagian_rs') ?>

    <?php // echo $form->field($model, 'bhp') ?>

    <?php // echo $form->field($model, 'bagian_perujuk') ?>

    <?php // echo $form->field($model, 'bagian_dokter') ?>

    <?php // echo $form->field($model, 'bagian_laborat') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'biaya_item') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
