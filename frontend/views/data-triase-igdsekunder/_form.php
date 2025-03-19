<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdsekunder $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igdsekunder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesa_singkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plan')->dropDownList([ 'Zona Kuning' => 'Zona Kuning', 'Zona Hijau' => 'Zona Hijau', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggaltriase')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
