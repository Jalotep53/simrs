<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganCovid $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-keterangan-covid-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'igm')->dropDownList([ 'REAKTIF' => 'REAKTIF', 'NON REAKTIF' => 'NON REAKTIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'igg')->dropDownList([ 'REAKTIF' => 'REAKTIF', 'NON REAKTIF' => 'NON REAKTIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sehat')->dropDownList([ 'X' => 'X', 'V' => 'V', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tidaksehat')->dropDownList([ 'X' => 'X', 'V' => 'V', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'berlakumulai')->textInput() ?>

    <?= $form->field($model, 'berlakuselsai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
