<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatKonfirmasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekonsiliasi-obat-konfirmasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rekonsiliasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diterima_farmasi')->textInput() ?>

    <?= $form->field($model, 'dikonfirmasi_apoteker')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diserahkan_pasien')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
