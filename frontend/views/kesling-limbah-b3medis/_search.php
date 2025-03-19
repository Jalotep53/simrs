<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahB3medisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kesling-limbah-b3medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jmllimbah') ?>

    <?= $form->field($model, 'tujuan_penyerahan') ?>

    <?= $form->field($model, 'bukti_dokumen') ?>

    <?php // echo $form->field($model, 'sisa_di_tps') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
