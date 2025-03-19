<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarKendali $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-keluar-kendali-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_kendali')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_indeks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_urut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_selesai')->textInput() ?>

    <?= $form->field($model, 'tgl_kembali')->textInput() ?>

    <?= $form->field($model, 'kepada')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
