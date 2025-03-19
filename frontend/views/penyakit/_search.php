<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penyakit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_penyakit') ?>

    <?= $form->field($model, 'nm_penyakit') ?>

    <?= $form->field($model, 'ciri_ciri') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'kd_ktg') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
