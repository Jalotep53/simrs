<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanMandiri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-mandiri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'umurdaftar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_registrasi')->textInput() ?>

    <?= $form->field($model, 'no_nota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_bayar')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_lanjut')->dropDownList([ 'Ranap' => 'Ranap', 'Ralan' => 'Ralan', 'Jual Bebas' => 'Jual Bebas', 'Deposit' => 'Deposit', 'Bayar Piutang' => 'Bayar Piutang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_closing')->textInput() ?>

    <?= $form->field($model, 'status_bayar')->dropDownList([ 'Sudah' => 'Sudah', 'Pending' => 'Pending', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pembatalan')->dropDownList([ 'Belum Dibatalkan' => 'Belum Dibatalkan', 'Sudah Dibatalkan' => 'Sudah Dibatalkan', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dibatalkan_oleh')->dropDownList([ 'MHAS' => 'MHAS', 'Faskes' => 'Faskes', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'besar_batal')->textInput() ?>

    <?= $form->field($model, 'kasir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tambahan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tambahan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tambahan3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diupdatebank')->textInput() ?>

    <?= $form->field($model, 'referensi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
