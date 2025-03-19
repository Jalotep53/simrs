<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanEkg $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-pemeriksaan-ekg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kiriman_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'irama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laju_jantung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gelombangp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intervalpr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'axis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kompleksqrs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'segmenst')->dropDownList([ 'Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gelombangt')->dropDownList([ 'Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesimpulan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
