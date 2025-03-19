<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Piutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_piutang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_piutang')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_jual')->dropDownList([ 'Jual Bebas' => 'Jual Bebas', 'Karyawan' => 'Karyawan', 'Beli Luar' => 'Beli Luar', 'Rawat Jalan' => 'Rawat Jalan', 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Utama' => 'Utama', 'VIP' => 'VIP', 'VVIP' => 'VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ongkir')->textInput() ?>

    <?= $form->field($model, 'uangmuka')->textInput() ?>

    <?= $form->field($model, 'sisapiutang')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'UMUM' => 'UMUM', 'PAJAK' => 'PAJAK', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgltempo')->textInput() ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
