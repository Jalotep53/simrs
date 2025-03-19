<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiRanapPostpartum $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-observasi-ranap-postpartum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tfu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontraksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perdarahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
