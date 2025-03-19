<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="matrik-akun-jns-perawatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendapatan_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beban_jasa_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utang_jasa_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beban_jasa_paramedis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utang_jasa_paramedis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beban_kso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utang_kso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hpp_persediaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persediaan_bhp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beban_jasa_sarana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utang_jasa_sarana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beban_menejemen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utang_menejemen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
