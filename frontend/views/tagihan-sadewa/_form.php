<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanSadewa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-sadewa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_nota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_bayar')->textInput() ?>

    <?= $form->field($model, 'jenis_bayar')->dropDownList([ 'Pelunasan' => 'Pelunasan', 'Deposit' => 'Deposit', 'Cicilan' => 'Cicilan', 'Uang Muka' => 'Uang Muka', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jumlah_tagihan')->textInput() ?>

    <?= $form->field($model, 'jumlah_bayar')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
