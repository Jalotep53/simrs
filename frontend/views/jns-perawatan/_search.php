<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jns-perawatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'nm_perawatan') ?>

    <?= $form->field($model, 'kd_kategori') ?>

    <?= $form->field($model, 'material') ?>

    <?= $form->field($model, 'bhp') ?>

    <?php // echo $form->field($model, 'tarif_tindakandr') ?>

    <?php // echo $form->field($model, 'tarif_tindakanpr') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'total_byrdr') ?>

    <?php // echo $form->field($model, 'total_byrpr') ?>

    <?php // echo $form->field($model, 'total_byrdrpr') ?>

    <?php // echo $form->field($model, 'kd_pj') ?>

    <?php // echo $form->field($model, 'kd_poli') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
