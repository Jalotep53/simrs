<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPsikologi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-psikologi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dikirim_dari')->dropDownList([ 'Ruang Rawat' => 'Ruang Rawat', 'Poliklinik' => 'Poliklinik', 'Rehabilitasi' => 'Rehabilitasi', 'After Care' => 'After Care', 'Dokter' => 'Dokter', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tujuan_pemeriksaan')->dropDownList([ 'Klinik' => 'Klinik', 'Bimbingan' => 'Bimbingan', 'Forensik' => 'Forensik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_anamnesis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rupa')->dropDownList([ 'Tampan' => 'Tampan', 'Buruk' => 'Buruk', 'Menarik' => 'Menarik', 'Memuakkan' => 'Memuakkan', 'Biasa' => 'Biasa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bentuk_tubuh')->dropDownList([ 'Sangat Tinggi' => 'Sangat Tinggi', 'Sangat Pendek' => 'Sangat Pendek', 'Sangat Kurus' => 'Sangat Kurus', 'Sangat Gemuk' => 'Sangat Gemuk', 'Tinggi' => 'Tinggi', 'Sedang' => 'Sedang', 'Atletik' => 'Atletik', 'Pendek' => 'Pendek', 'Langsing' => 'Langsing', 'Gemuk' => 'Gemuk', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tindakan')->dropDownList([ 'Sopan' => 'Sopan', 'Tidak Sopan' => 'Tidak Sopan', 'Kurang Tahu Aturan' => 'Kurang Tahu Aturan', 'Canggung' => 'Canggung', 'Bebas' => 'Bebas', 'Tegas' => 'Tegas', 'Garang' => 'Garang', 'Percaya Diri' => 'Percaya Diri', 'Tertekan' => 'Tertekan', 'Ragu-Ragu' => 'Ragu-Ragu', 'Pasti' => 'Pasti', 'Kaku' => 'Kaku', 'Ceroboh' => 'Ceroboh', 'Dingin' => 'Dingin', 'Malu-Malu' => 'Malu-Malu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pakaian')->dropDownList([ 'Rapi' => 'Rapi', 'Serampangan' => 'Serampangan', 'Terpelihara' => 'Terpelihara', 'Tidak Terpelihara' => 'Tidak Terpelihara', 'Teratur' => 'Teratur', 'Tidak Rapi' => 'Tidak Rapi', 'Sederhana' => 'Sederhana', 'Biasa' => 'Biasa', 'Bersih' => 'Bersih', 'Kotor' => 'Kotor', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekspresi')->dropDownList([ 'Sangat Mudah' => 'Sangat Mudah', 'Hati-Hati Dan Membatasi Diri' => 'Hati-Hati Dan Membatasi Diri', 'Sukar Mencari Kata-Kata' => 'Sukar Mencari Kata-Kata', 'Mudah' => 'Mudah', 'Terbuka' => 'Terbuka', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'berbicara')->dropDownList([ 'Tenang' => 'Tenang', 'Acuh Tak Acuh' => 'Acuh Tak Acuh', 'Gugup' => 'Gugup', 'Lancar' => 'Lancar', 'Ribut Dengan Banyak Gerak dan Isyarat' => 'Ribut Dengan Banyak Gerak dan Isyarat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penggunaan_kata')->dropDownList([ 'Ramah' => 'Ramah', 'Dibuat-Buat' => 'Dibuat-Buat', 'Dengan Tekanan Suara' => 'Dengan Tekanan Suara', 'Terpengaruh Bahasa Daerah' => 'Terpengaruh Bahasa Daerah', 'Disertai Dengan Istilah Bahasa Asing' => 'Disertai Dengan Istilah Bahasa Asing', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ciri_menyolok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hasil_psikotes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kepribadian')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'psikodinamika')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesimpulan_psikolog')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
