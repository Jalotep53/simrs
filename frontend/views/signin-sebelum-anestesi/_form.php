<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SigninSebelumAnestesi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="signin-sebelum-anestesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'sncn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identitas')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penandaan_area_operasi')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', 'Tidak Diperlukan' => 'Tidak Diperlukan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resiko_aspirasi')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resiko_aspirasi_rencana_antisipasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resiko_kehilangan_darah')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resiko_kehilangan_darah_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resiko_kehilangan_darah_rencana_antisipasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesiapan_alat_obat_anestesi')->dropDownList([ 'Lengkap' => 'Lengkap', 'Pulsa Oximetri' => 'Pulsa Oximetri', 'Tidak Lengkap' => 'Tidak Lengkap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesiapan_alat_obat_anestesi_rencana_antisipasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_perawat_ok')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
