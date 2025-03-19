<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UjiFungsiKfr $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="uji-fungsi-kfr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'diagnosis_fungsional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hasil_didapat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesimpulan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekomedasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
