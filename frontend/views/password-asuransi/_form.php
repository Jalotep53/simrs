<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasswordAsuransi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="password-asuransi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passworde')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
