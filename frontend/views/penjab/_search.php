<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenjabSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_pj') ?>

    <?= $form->field($model, 'png_jawab') ?>

    <?= $form->field($model, 'nama_perusahaan') ?>

    <?= $form->field($model, 'alamat_asuransi') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'attn') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
