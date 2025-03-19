<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TimeoutSebelumInsisi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="timeout-sebelum-insisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'sncn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verbal_identitas')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'verbal_tindakan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'verbal_area_insisi')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penandaan_area_operasi')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', 'Tidak Diperlukan' => 'Tidak Diperlukan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lama_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penayangan_radiologi')->dropDownList([ 'Ditayangkan' => 'Ditayangkan', 'Benar' => 'Benar', 'Tidak Diperlukan' => 'Tidak Diperlukan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penayangan_ctscan')->dropDownList([ 'Ditayangkan' => 'Ditayangkan', 'Benar' => 'Benar', 'Tidak Diperlukan' => 'Tidak Diperlukan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penayangan_mri')->dropDownList([ 'Ditayangkan' => 'Ditayangkan', 'Benar' => 'Benar', 'Tidak Diperlukan' => 'Tidak Diperlukan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'antibiotik_profilaks')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_antibiotik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_pemberian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antisipasi_kehilangan_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hal_khusus')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hal_khusus_diperhatikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_steril')->textInput() ?>

    <?= $form->field($model, 'petujuk_sterilisasi')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'verifikasi_preoperatif')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip_perawat_ok')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
