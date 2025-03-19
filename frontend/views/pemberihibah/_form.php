<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Pemberihibah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemberihibah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pemberi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemberi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
