<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkorStewardPascaAnestesi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skor-steward-pasca-anestesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala1')->dropDownList([ 'Belum Respon' => 'Belum Respon', 'Bangun Jika Dipanggil' => 'Bangun Jika Dipanggil', 'Sadar Penuh' => 'Sadar Penuh', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai1')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala2')->dropDownList([ 'Perlu Bantuan Bernafas' => 'Perlu Bantuan Bernafas', 'Berusaha Bernafas' => 'Berusaha Bernafas', 'Batuk / Menangis' => 'Batuk / Menangis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai2')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala3')->dropDownList([ 'Tidak Bergerak' => 'Tidak Bergerak', 'Gerakan Tanpa Tujuan' => 'Gerakan Tanpa Tujuan', 'Gerakan Beraturan' => 'Gerakan Beraturan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai3')->textInput() ?>

    <?= $form->field($model, 'penilaian_totalnilai')->textInput() ?>

    <?= $form->field($model, 'keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instruksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
