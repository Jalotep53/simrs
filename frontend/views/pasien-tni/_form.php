<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienTni $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-tni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan_tni')->textInput() ?>

    <?= $form->field($model, 'pangkat_tni')->textInput() ?>

    <?= $form->field($model, 'satuan_tni')->textInput() ?>

    <?= $form->field($model, 'jabatan_tni')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
