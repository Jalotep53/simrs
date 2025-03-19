<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanRadiologi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-radiologi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noorder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_permintaan')->textInput() ?>

    <?= $form->field($model, 'jam_permintaan')->textInput() ?>

    <?= $form->field($model, 'tgl_sampel')->textInput() ?>

    <?= $form->field($model, 'jam_sampel')->textInput() ?>

    <?= $form->field($model, 'tgl_hasil')->textInput() ?>

    <?= $form->field($model, 'jam_hasil')->textInput() ?>

    <?= $form->field($model, 'dokter_perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'ralan' => 'Ralan', 'ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'informasi_tambahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
