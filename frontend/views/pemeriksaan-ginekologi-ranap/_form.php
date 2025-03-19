<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanGinekologiRanap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemeriksaan-ginekologi-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'inspeksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspeksi_vulva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspekulo_gine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fluxus_gine')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fluor_gine')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'vulva_inspekulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'portio_inspekulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sondage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'portio_dalam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bentuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cavum_uteri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobilitas')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ukuran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri_tekan')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'adnexa_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adnexa_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cavum_douglas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
