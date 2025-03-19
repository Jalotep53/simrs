<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Setsms $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setsms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_sms')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sintax_balasan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
