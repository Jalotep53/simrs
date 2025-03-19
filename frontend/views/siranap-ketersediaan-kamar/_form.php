<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SiranapKetersediaanKamar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="siranap-ketersediaan-kamar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_ruang_siranap')->dropDownList([ '0000 Umum' => '0000 Umum', '0001 Anak' => '0001 Anak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelas_ruang_siranap')->dropDownList([ '0001 Super VIP' => '0001 Super VIP', '0002 VIP' => '0002 VIP', '0003 Kelas 1' => '0003 Kelas 1', '0004 Kelas 2' => '0004 Kelas 2', '0005 Kelas 3' => '0005 Kelas 3', '0006 Intermediate' => '0006 Intermediate', '0007 Isolasi' => '0007 Isolasi', '0008 Rawat Khusus' => '0008 Rawat Khusus', '0009 Stroke Care Unit' => '0009 Stroke Care Unit', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->dropDownList([ 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'tersedia')->textInput() ?>

    <?= $form->field($model, 'tersediapria')->textInput() ?>

    <?= $form->field($model, 'tersediawanita')->textInput() ?>

    <?= $form->field($model, 'menunggu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
