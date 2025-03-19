<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienPolri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-polri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan_polri')->textInput() ?>

    <?= $form->field($model, 'pangkat_polri')->textInput() ?>

    <?= $form->field($model, 'satuan_polri')->textInput() ?>

    <?= $form->field($model, 'jabatan_polri')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
