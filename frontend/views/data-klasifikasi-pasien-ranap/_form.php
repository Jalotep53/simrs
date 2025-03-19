<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataKlasifikasiPasienRanap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-klasifikasi-pasien-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Minimal')->dropDownList([ 'TIDAK' => 'TIDAK', 'IYA' => 'IYA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Partial')->dropDownList([ 'TIDAK' => 'TIDAK', 'IYA' => 'IYA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Total')->dropDownList([ 'TIDAK' => 'TIDAK', 'IYA' => 'IYA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
