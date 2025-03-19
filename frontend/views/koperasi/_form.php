<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Koperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="koperasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wajib')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
