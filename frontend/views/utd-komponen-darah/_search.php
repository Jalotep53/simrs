<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdKomponenDarahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-komponen-darah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'lama') ?>

    <?= $form->field($model, 'jasa_sarana') ?>

    <?= $form->field($model, 'paket_bhp') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'manajemen') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'pembatalan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
