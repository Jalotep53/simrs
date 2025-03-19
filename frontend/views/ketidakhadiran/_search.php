<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KetidakhadiranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ketidakhadiran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jns') ?>

    <?= $form->field($model, 'ktg') ?>

    <?= $form->field($model, 'jml') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
