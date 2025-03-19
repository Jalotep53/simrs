<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Sms $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sms_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pdu_pesan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'encoding')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_gateway')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_sms')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
