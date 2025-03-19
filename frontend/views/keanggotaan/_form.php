<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Keanggotaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="keanggotaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'koperasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jamsostek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
