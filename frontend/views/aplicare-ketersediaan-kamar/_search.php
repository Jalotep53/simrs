<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AplicareKetersediaanKamarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aplicare-ketersediaan-kamar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_kelas_aplicare') ?>

    <?= $form->field($model, 'kd_bangsal') ?>

    <?= $form->field($model, 'kelas') ?>

    <?= $form->field($model, 'kapasitas') ?>

    <?= $form->field($model, 'tersedia') ?>

    <?php // echo $form->field($model, 'tersediapria') ?>

    <?php // echo $form->field($model, 'tersediawanita') ?>

    <?php // echo $form->field($model, 'tersediapriawanita') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
