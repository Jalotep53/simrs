<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanUtd $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jns-perawatan-utd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_perawatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bagian_rs')->textInput() ?>

    <?= $form->field($model, 'bhp')->textInput() ?>

    <?= $form->field($model, 'tarif_perujuk')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_dokter')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_petugas')->textInput() ?>

    <?= $form->field($model, 'kso')->textInput() ?>

    <?= $form->field($model, 'manajemen')->textInput() ?>

    <?= $form->field($model, 'total_byr')->textInput() ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
