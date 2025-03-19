<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananNonMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-pemesanan-non-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pemesanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_suplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'subtotal')->textInput() ?>

    <?= $form->field($model, 'potongan')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'ppn')->textInput() ?>

    <?= $form->field($model, 'meterai')->textInput() ?>

    <?= $form->field($model, 'tagihan')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Proses Pesan' => 'Proses Pesan', 'Sudah Datang' => 'Sudah Datang', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
