<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Returjual $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="returjual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_retur_jual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_retur')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
