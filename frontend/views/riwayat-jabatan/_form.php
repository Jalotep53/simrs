<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatJabatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-jabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt_pangkat')->textInput() ?>

    <?= $form->field($model, 'tmt_pangkat_yad')->textInput() ?>

    <?= $form->field($model, 'pejabat_penetap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_sk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_sk')->textInput() ?>

    <?= $form->field($model, 'dasar_peraturan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masa_kerja')->textInput() ?>

    <?= $form->field($model, 'bln_kerja')->textInput() ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
