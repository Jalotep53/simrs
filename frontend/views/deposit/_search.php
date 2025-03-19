<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DepositSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="deposit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_deposit') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_deposit') ?>

    <?= $form->field($model, 'nama_bayar') ?>

    <?= $form->field($model, 'besarppn') ?>

    <?php // echo $form->field($model, 'besar_deposit') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
