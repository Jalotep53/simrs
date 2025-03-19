<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TokopenjualanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tokopenjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nota_jual') ?>

    <?= $form->field($model, 'tgl_jual') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'no_member') ?>

    <?= $form->field($model, 'nm_member') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'jns_jual') ?>

    <?php // echo $form->field($model, 'ongkir') ?>

    <?php // echo $form->field($model, 'ppn') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'nama_bayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
