<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JamDietPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jam-diet-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'waktu')->dropDownList([ 'Pagi' => 'Pagi', 'Pagi2' => 'Pagi2', 'Pagi3' => 'Pagi3', 'Siang' => 'Siang', 'Siang2' => 'Siang2', 'Siang3' => 'Siang3', 'Sore' => 'Sore', 'Sore2' => 'Sore2', 'Sore3' => 'Sore3', 'Malam' => 'Malam', 'Malam2' => 'Malam2', 'Malam3' => 'Malam3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jam')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
