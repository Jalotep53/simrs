<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisHibahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-hibah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_hibah') ?>

    <?= $form->field($model, 'kode_pemberi') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tgl_hibah') ?>

    <?= $form->field($model, 'totalhibah') ?>

    <?php // echo $form->field($model, 'kd_rek_aset') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
