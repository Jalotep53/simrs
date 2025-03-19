<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Industrifarmasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="industrifarmasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_industri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_industri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
