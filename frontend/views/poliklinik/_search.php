<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PoliklinikSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="poliklinik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_poli') ?>

    <?= $form->field($model, 'nm_poli') ?>

    <?= $form->field($model, 'registrasi') ?>

    <?= $form->field($model, 'registrasilama') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
