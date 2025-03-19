<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Jadwal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hari_kerja')->dropDownList([ 'SENIN' => 'SENIN', 'SELASA' => 'SELASA', 'RABU' => 'RABU', 'KAMIS' => 'KAMIS', 'JUMAT' => 'JUMAT', 'SABTU' => 'SABTU', 'AKHAD' => 'AKHAD', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jam_mulai')->textInput() ?>

    <?= $form->field($model, 'jam_selesai')->textInput() ?>

    <?= $form->field($model, 'kd_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kuota')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
