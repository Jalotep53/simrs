<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Poliklinik $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="poliklinik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registrasi')->textInput() ?>

    <?= $form->field($model, 'registrasilama')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
