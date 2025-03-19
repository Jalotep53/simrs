<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SignoutSebelumMenutupLuka $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="signout-sebelum-menutup-luka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'sncn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verbal_tindakan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'verbal_kelengkapan_kasa')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'verbal_instrumen')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'verbal_alat_tajam')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelengkapan_specimen_label')->dropDownList([ 'Lengkap' => 'Lengkap', 'Tidak Lengkap' => 'Tidak Lengkap', 'Tidak Ada Pemeriksaan Spesimen' => 'Tidak Ada Pemeriksaan Spesimen', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelengkapan_specimen_formulir')->dropDownList([ 'Lengkap' => 'Lengkap', 'Tidak Lengkap' => 'Tidak Lengkap', 'Tidak Ada Pemeriksaan Spesimen' => 'Tidak Ada Pemeriksaan Spesimen', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'peninjauan_kegiatan_dokter_bedah')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'peninjauan_kegiatan_dokter_anestesi')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'peninjauan_kegiatan_perawat_kamar_ok')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'perhatian_utama_fase_pemulihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_perawat_ok')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
