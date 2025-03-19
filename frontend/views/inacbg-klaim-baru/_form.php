<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inacbg-klaim-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admission_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospital_admission_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
