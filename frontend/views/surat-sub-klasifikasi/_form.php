<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSubKlasifikasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-sub-klasifikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bulanan')->textInput() ?>

    <?= $form->field($model, 'no_tahunan')->textInput() ?>

    <?= $form->field($model, 'bulan')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
