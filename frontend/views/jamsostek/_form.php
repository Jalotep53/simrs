<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Jamsostek $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jamsostek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
