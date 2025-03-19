<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TindakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tnd') ?>

    <?= $form->field($model, 'jm') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?php // echo $form->field($model, 'kamar') ?>

    <?php // echo $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'jmlh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
