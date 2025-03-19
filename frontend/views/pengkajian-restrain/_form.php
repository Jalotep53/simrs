<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrain $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengkajian-restrain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refleka_cahaya_ka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refleka_cahaya_ki')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuran_pupil_ka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuran_pupil_ki')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hasil_observasi')->dropDownList([ 'Pasien Gelisah/Delirium Dan Berontak' => 'Pasien Gelisah/Delirium Dan Berontak', 'Pasien Tidak Kooperatif' => 'Pasien Tidak Kooperatif', 'Ketidakmampuan Dalam Mengikuti Perintah Untuk Tidak Meninggalkan Tempat Tidur' => 'Ketidakmampuan Dalam Mengikuti Perintah Untuk Tidak Meninggalkan Tempat Tidur', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pertimbangan_klinis')->dropDownList([ 'Membahayakan Diri Sendiri' => 'Membahayakan Diri Sendiri', 'Membahayakan Orang Lain' => 'Membahayakan Orang Lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'restrain_non_farmakologi')->dropDownList([ 'Restrain Pergelangan Tangan' => 'Restrain Pergelangan Tangan', 'Restrain Pergelangan Kaki' => 'Restrain Pergelangan Kaki', 'Restrain Badan' => 'Restrain Badan', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'restrain_non_farmakologi_keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restrain_farmakologi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sudah_dijelaskan_keluarga')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluarga_yang_menyetujui')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
