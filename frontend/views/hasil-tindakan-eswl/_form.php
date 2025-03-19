<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilTindakanEswl $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-tindakan-eswl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mulai')->textInput() ?>

    <?= $form->field($model, 'selesai')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_analgesik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian_tindakan_focus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian_tindakan_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian_tindakan_power')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian_tindakan_shock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diintegrasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kekurangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anjungan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
