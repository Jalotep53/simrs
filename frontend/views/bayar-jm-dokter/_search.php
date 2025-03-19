<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\modelsBayarJmDokterSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-jm-dokter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_bayar') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'besar_bayar') ?>

    <?= $form->field($model, 'nama_bayar') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'rawatjalan') ?>

    <?php // echo $form->field($model, 'rawatinap') ?>

    <?php // echo $form->field($model, 'labrawatjalan') ?>

    <?php // echo $form->field($model, 'labrawatinap') ?>

    <?php // echo $form->field($model, 'radrawatjalan') ?>

    <?php // echo $form->field($model, 'radrawatinap') ?>

    <?php // echo $form->field($model, 'operasiralan') ?>

    <?php // echo $form->field($model, 'operasiranap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
