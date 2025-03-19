<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanPersalinan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-persalinan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mulai')->textInput() ?>

    <?= $form->field($model, 'selesai')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'waktu_persalinan_kala_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_persalinan_kala_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_persalinan_kala_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_persalinan_jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perineum')->dropDownList([ 'Utuh' => 'Utuh', 'Rupture' => 'Rupture', 'Episiotomi' => 'Episiotomi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jahitan_luar_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jahitan_luar_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jahitan_dalam_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jahitan_dalam_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anak')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_lahir')->dropDownList([ 'Hidup' => 'Hidup', 'Mati' => 'Mati', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'apgar_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelainan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ketuban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'placenta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tali_pusat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insertio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'darah_keluar_kala_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'darah_keluar_kala_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'darah_keluar_kala_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'darah_keluar_kala_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'darah_keluar_jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi_umum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontraksi_uterus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ppv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengobatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
