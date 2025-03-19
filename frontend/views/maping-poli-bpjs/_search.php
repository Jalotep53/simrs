<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-poli-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_poli_rs') ?>

    <?= $form->field($model, 'kd_poli_bpjs') ?>

    <?= $form->field($model, 'nm_poli_bpjs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
