<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhLansia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-lanjutan-resiko-jatuh-lansia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala1')->dropDownList([ 'Tidak' => 'Tidak', 'Pasien Datang Karena Jatuh' => 'Pasien Datang Karena Jatuh', 'Pasien Jatuh Dalam 2 Bulan Terakhir' => 'Pasien Jatuh Dalam 2 Bulan Terakhir', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai1')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala2')->dropDownList([ 'Tidak' => 'Tidak', 'Pasien Delirium' => 'Pasien Delirium', 'Pasien Disorientasi' => 'Pasien Disorientasi', 'Pasien Agitasi' => 'Pasien Agitasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai2')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala3')->dropDownList([ 'Tidak' => 'Tidak', 'Memakai Kaca Mata' => 'Memakai Kaca Mata', 'Penglihatan Kabur' => 'Penglihatan Kabur', 'Memiliki Glukoma/Katarak/Degenerasi Makula' => 'Memiliki Glukoma/Katarak/Degenerasi Makula', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai3')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala4')->dropDownList([ 'Tidak' => 'Tidak', 'Prilaku Berkemih/Frekuensi/Urgensi/Incontinensia/Nokturia' => 'Prilaku Berkemih/Frekuensi/Urgensi/Incontinensia/Nokturia', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai4')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala5')->dropDownList([ 'Mandiri' => 'Mandiri', 'Memerlukan Bantuan 1 Orang/Pengawasan' => 'Memerlukan Bantuan 1 Orang/Pengawasan', 'Memerlukan Bantuan 2 Orang' => 'Memerlukan Bantuan 2 Orang', 'Memerlukan Bantuan Total' => 'Memerlukan Bantuan Total', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai5')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala6')->dropDownList([ 'Mandiri' => 'Mandiri', 'Berjalan Dengan Bantuan 1 Orang' => 'Berjalan Dengan Bantuan 1 Orang', 'Menggunakan Kursi Roda' => 'Menggunakan Kursi Roda', 'Imobilisasi' => 'Imobilisasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai6')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_totalnilai')->textInput() ?>

    <?= $form->field($model, 'hasil_skrining')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
