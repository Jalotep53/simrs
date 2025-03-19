<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Rekeningtahun $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekeningtahun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saldo_awal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
