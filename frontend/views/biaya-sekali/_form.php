<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaSekali $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="biaya-sekali-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_biaya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
