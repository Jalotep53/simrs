<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankbri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-akun-bankbri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumer_secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institution_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'briva_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urlapi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
