<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianUlangNyeri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-ulang-nyeri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nyeri')->dropDownList([ 'Tidak Ada Nyeri' => 'Tidak Ada Nyeri', 'Nyeri Akut' => 'Nyeri Akut', 'Nyeri Kronis' => 'Nyeri Kronis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'provokes')->dropDownList([ 'Proses Penyakit' => 'Proses Penyakit', 'Benturan' => 'Benturan', 'Lain-lain' => 'Lain-lain', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_provokes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quality')->dropDownList([ 'Seperti Tertusuk' => 'Seperti Tertusuk', 'Berdenyut' => 'Berdenyut', 'Teriris' => 'Teriris', 'Tertindih' => 'Tertindih', 'Tertiban' => 'Tertiban', 'Lain-lain' => 'Lain-lain', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menyebar')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skala_nyeri')->dropDownList([ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'durasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri_hilang')->dropDownList([ 'Istirahat' => 'Istirahat', 'Medengar Musik' => 'Medengar Musik', 'Minum Obat' => 'Minum Obat', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_nyeri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
