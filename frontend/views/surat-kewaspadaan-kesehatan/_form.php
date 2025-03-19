<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKewaspadaanKesehatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-kewaspadaan-kesehatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalperiksa')->textInput() ?>

    <?= $form->field($model, 'keluhan_saat_ini')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
