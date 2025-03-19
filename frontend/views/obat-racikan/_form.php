<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-racikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_dr')->textInput() ?>

    <?= $form->field($model, 'aturan_pakai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
