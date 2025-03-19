<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenatalaksanaanTerapiOkupasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penatalaksanaan-terapi-okupasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesa_general')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanda_vital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spesialisasi')->dropDownList([ 'Pediatri' => 'Pediatri', 'Dewasa' => 'Dewasa', 'Geriatri' => 'Geriatri', 'Psikososial' => 'Psikososial', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_spesialisasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_okupasi_terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aset')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'limitasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_terapi_okupasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_intervensi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
