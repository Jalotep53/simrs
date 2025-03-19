<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsg $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-pemeriksaan-usg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kiriman_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kantong_gestasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuran_bokongkepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_prestasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diameter_biparietal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panjang_femur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkar_abdomen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tafsiran_berat_janin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia_kehamilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plasenta_berimplatansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'derajat_maturitas')->dropDownList([ '0', '1', '2', '3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jumlah_air_ketuban')->dropDownList([ 'Cukup' => 'Cukup', 'Berkurang' => 'Berkurang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'indek_cairan_ketuban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelainan_kongenital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peluang_sex')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesimpulan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
