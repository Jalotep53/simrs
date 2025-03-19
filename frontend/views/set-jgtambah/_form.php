<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetJgtambah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-jgtambah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tnj')->textInput() ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
