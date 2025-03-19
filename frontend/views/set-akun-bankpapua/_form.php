<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankpapua $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-akun-bankpapua-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passworde')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
