<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HibahObatBhpSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hibah-obat-bhp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_hibah') ?>

    <?= $form->field($model, 'kode_pemberi') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tgl_hibah') ?>

    <?= $form->field($model, 'totalhibah') ?>

    <?php // echo $form->field($model, 'totalnilai') ?>

    <?php // echo $form->field($model, 'kd_bangsal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
