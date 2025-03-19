<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkdpBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skdp-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rtl1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rtl2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_datang')->textInput() ?>

    <?= $form->field($model, 'tanggal_rujukan')->textInput() ?>

    <?= $form->field($model, 'no_antrian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Menunggu' => 'Menunggu', 'Sudah Periksa' => 'Sudah Periksa', 'Batal Periksa' => 'Batal Periksa', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
