<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MutasiBerkas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mutasi-berkas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Sudah Dikirim' => 'Sudah Dikirim', 'Sudah Diterima' => 'Sudah Diterima', 'Sudah Kembali' => 'Sudah Kembali', 'Tidak Ada' => 'Tidak Ada', 'Masuk Ranap' => 'Masuk Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dikirim')->textInput() ?>

    <?= $form->field($model, 'diterima')->textInput() ?>

    <?= $form->field($model, 'kembali')->textInput() ?>

    <?= $form->field($model, 'tidakada')->textInput() ?>

    <?= $form->field($model, 'ranap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
