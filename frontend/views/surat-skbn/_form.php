<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSkbn $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-skbn-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalsurat')->textInput() ?>

    <?= $form->field($model, 'kategori')->dropDownList([ 'UMUM' => 'UMUM', 'POLRI' => 'POLRI', 'TNI' => 'TNI', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opiat')->dropDownList([ 'NEGATIF' => 'NEGATIF', 'POSITIF' => 'POSITIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ganja')->dropDownList([ 'NEGATIF' => 'NEGATIF', 'POSITIF' => 'POSITIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'amphetamin')->dropDownList([ 'NEGATIF' => 'NEGATIF', 'POSITIF' => 'POSITIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'methamphetamin')->dropDownList([ 'NEGATIF' => 'NEGATIF', 'POSITIF' => 'POSITIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'benzodiazepin')->dropDownList([ 'NEGATIF' => 'NEGATIF', 'POSITIF' => 'POSITIF', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cocain')->dropDownList([ 'NEGATIF' => 'NEGATIF', 'POSITIF' => 'POSITIF', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
