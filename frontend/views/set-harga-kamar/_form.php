<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaKamar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-harga-kamar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarif')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
