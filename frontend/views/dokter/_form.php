<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Dokter $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dokter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'gol_drh')->dropDownList([ 'A' => 'A', 'B' => 'B', 'O' => 'O', 'AB' => 'AB', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'almt_tgl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_nikah')->dropDownList([ 'BELUM MENIKAH' => 'BELUM MENIKAH', 'MENIKAH' => 'MENIKAH', 'JANDA' => 'JANDA', 'DUDHA' => 'DUDHA', 'JOMBLO' => 'JOMBLO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_sps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ijn_praktek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
