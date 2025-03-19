<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianKorbanKekerasan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-korban-kekerasan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'informasi')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan_dengan_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_saudara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi_keluaga')->dropDownList([ 'Bahagia' => 'Bahagia', 'Broken Home' => 'Broken Home', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan_orang_terdekat')->dropDownList([ 'Ada Masalah' => 'Ada Masalah', 'Tidak Ada Masalah' => 'Tidak Ada Masalah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kekerasan_yang_dialami')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_kejadian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama_kekerasan')->textInput() ?>

    <?= $form->field($model, 'periode_kekerasan')->dropDownList([ 'Hari' => 'Hari', 'Bulan' => 'Bulan', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seberapa_sering_mengalami')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemicu_kekerasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yang_melakukan_kekerasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dampak_kekerasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanda_tanda_didapatkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memerlukan_pendampingan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_kelainan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_kepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_thoraks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_leher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_abdomen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_genitalia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_ekstrimitas_atas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_ekstrimitas_bawah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_anus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
