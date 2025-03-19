<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ClosingKasir $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="closing-kasir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shift')->dropDownList([ 'Pagi' => 'Pagi', 'Siang' => 'Siang', 'Sore' => 'Sore', 'Malam' => 'Malam', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jam_masuk')->textInput() ?>

    <?= $form->field($model, 'jam_pulang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
