<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TokoBayarPiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="toko-bayar-piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_bayar')->textInput() ?>

    <?= $form->field($model, 'no_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_cicilan')->textInput() ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nota_piutang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek_kontra')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
