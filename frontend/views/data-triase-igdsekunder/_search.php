<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdsekunderSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igdsekunder-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'anamnesa_singkat') ?>

    <?= $form->field($model, 'catatan') ?>

    <?= $form->field($model, 'plan') ?>

    <?= $form->field($model, 'tanggaltriase') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
