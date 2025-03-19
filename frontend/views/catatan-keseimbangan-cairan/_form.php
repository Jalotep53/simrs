<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanKeseimbanganCairan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-keseimbangan-cairan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'infus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tranfusi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iwl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keseimbangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
