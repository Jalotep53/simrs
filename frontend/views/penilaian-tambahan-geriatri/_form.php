<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTambahanGeriatri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-tambahan-geriatri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal_masuk')->dropDownList([ 'IGD' => 'IGD', 'Kamar Bersalin' => 'Kamar Bersalin', 'Klinik' => 'Klinik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kondisi_masuk')->dropDownList([ 'Mandiri' => 'Mandiri', 'Kursi Roda' => 'Kursi Roda', 'Dipapah' => 'Dipapah', 'Tempat Tidur' => 'Tempat Tidur', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kondisi_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'diagnosa_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_immuno_telinga')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_sinus')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_antibiotik')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_pneumonia')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_abses')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_sariawan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_memerlukan_antibiotik')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_infeksi_dalam')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_immunodefisiensi_primer')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_jenis_kangker')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_immuno_infeksi_oportunistik')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pola_aktifitas_tidur')->dropDownList([ 'TAK' => 'TAK', 'Insomnia' => 'Insomnia', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pola_aktifitas_tidur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pola_aktifitas_obat_tidur')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pola_aktifitas_obat_tidur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pola_aktifitas_olahraga')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pola_aktifitas_olahraga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kualitas_hidup_mobilitas')->dropDownList([ 'Tidak Mempunyai Masalah Untuk Berjalan' => 'Tidak Mempunyai Masalah Untuk Berjalan', 'Ada Masalah Untuk Berjalan' => 'Ada Masalah Untuk Berjalan', 'Hanya Mampu Berbaring' => 'Hanya Mampu Berbaring', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kualitas_hidup_perawatan_diri')->dropDownList([ 'Tidak Mempunyai Kesulitan Dalam Perawatan Diri Sendiri' => 'Tidak Mempunyai Kesulitan Dalam Perawatan Diri Sendiri', 'Mengalami Kesulitan Untuk Membasuh Badan, Mandi Atau Berpakaian' => 'Mengalami Kesulitan Untuk Membasuh Badan, Mandi Atau Berpakaian', 'Tidak Mampu Membasuh Badan, Mandi/Berpakaian Sendiri' => 'Tidak Mampu Membasuh Badan, Mandi/Berpakaian Sendiri', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kualitas_hidup_aktifitas_seharihari')->dropDownList([ 'Tak Mempunyai Kesulitan Dalam Melaksanakan Kegiatan Sehari-hari' => 'Tak Mempunyai Kesulitan Dalam Melaksanakan Kegiatan Sehari-hari', 'Mempunyai Keterbatasan Dalam Melaksanakan Kegiatan Sehari-hari' => 'Mempunyai Keterbatasan Dalam Melaksanakan Kegiatan Sehari-hari', 'Tak Mampu Melaksanakan Kegiatan Sehari-hari' => 'Tak Mampu Melaksanakan Kegiatan Sehari-hari', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kualitas_hidup_rasa_nyeri')->dropDownList([ 'Tidak Mempunyai Keluhan Rasa Nyeri Atau Rasa Tak Nyaman' => 'Tidak Mempunyai Keluhan Rasa Nyeri Atau Rasa Tak Nyaman', 'Suka Merasakan Agak Nyeri/Agak Kurang Nyaman' => 'Suka Merasakan Agak Nyeri/Agak Kurang Nyaman', 'Menderita Karena Keluhan Rasa Nyeri/Tidak Nyaman' => 'Menderita Karena Keluhan Rasa Nyeri/Tidak Nyaman', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skala_nyeri')->dropDownList([ '0 - Tidak Nyeri' => '0 - Tidak Nyeri', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
