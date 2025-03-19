<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkorAldrettePascaAnestesi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skor-aldrette-pasca-anestesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala1')->dropDownList([ 'Tidak Sanggup Menggerakan Satupun Anggota Gerak' => 'Tidak Sanggup Menggerakan Satupun Anggota Gerak', 'Sanggup Gerak 2 Anggota Tubuh' => 'Sanggup Gerak 2 Anggota Tubuh', 'Sanggup Gerak 4 Anggota Tubuh' => 'Sanggup Gerak 4 Anggota Tubuh', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai1')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala2')->dropDownList([ 'Apnea Atau Napas Tidak Adekuat' => 'Apnea Atau Napas Tidak Adekuat', 'Sesak Atau Pernapasan Sedikit Terbatas' => 'Sesak Atau Pernapasan Sedikit Terbatas', 'Sanggup Bernafas Dalam Serta Disuruh Batuk' => 'Sanggup Bernafas Dalam Serta Disuruh Batuk', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai2')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala3')->dropDownList([ '± 50% Tekanan Darah Pra Anestesi' => '± 50% Tekanan Darah Pra Anestesi', '± 20% - 50% Tekanan Darah Pra Anestesi' => '± 20% - 50% Tekanan Darah Pra Anestesi', '± 20% Tekanan Darah Pra Anestesi' => '± 20% Tekanan Darah Pra Anestesi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai3')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala4')->dropDownList([ 'Tidak Ada Respon' => 'Tidak Ada Respon', 'Respon Terhadap Panggilan' => 'Respon Terhadap Panggilan', 'Sadar Penuh' => 'Sadar Penuh', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai4')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala5')->dropDownList([ 'Cianosis' => 'Cianosis', 'Pucat' => 'Pucat', 'Kemerahan / Normal' => 'Kemerahan / Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai5')->textInput() ?>

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
