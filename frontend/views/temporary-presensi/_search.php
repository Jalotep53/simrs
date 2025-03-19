<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryPresensiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="temporary-presensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'shift') ?>

    <?= $form->field($model, 'jam_datang') ?>

    <?= $form->field($model, 'jam_pulang') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'keterlambatan') ?>

    <?php // echo $form->field($model, 'durasi') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
