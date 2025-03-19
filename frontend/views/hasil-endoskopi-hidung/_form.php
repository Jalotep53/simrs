<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiHidung $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-endoskopi-hidung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kiriman_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi_hidung_kanan')->dropDownList([ 'Lapang' => 'Lapang', 'Sempit' => 'Sempit', 'Mukosa Edema' => 'Mukosa Edema', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kondisi_hidung_kiri')->dropDownList([ 'Lapang' => 'Lapang', 'Sempit' => 'Sempit', 'Mukosa Edema' => 'Mukosa Edema', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kavum_nasi_kanan')->dropDownList([ 'Mukosa Pucat' => 'Mukosa Pucat', 'Mukosa Hiperemis' => 'Mukosa Hiperemis', 'Massa' => 'Massa', 'Polip' => 'Polip', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kavum_nasi_kiri')->dropDownList([ 'Mukosa Pucat' => 'Mukosa Pucat', 'Mukosa Hiperemis' => 'Mukosa Hiperemis', 'Massa' => 'Massa', 'Polip' => 'Polip', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'konka_inferior_kanan')->dropDownList([ 'Eutrofi' => 'Eutrofi', 'Hipertrofi' => 'Hipertrofi', 'Atrofi' => 'Atrofi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'konka_inferior_kiri')->dropDownList([ 'Eutrofi' => 'Eutrofi', 'Hipertrofi' => 'Hipertrofi', 'Atrofi' => 'Atrofi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'meatus_medius_kanan')->dropDownList([ 'Terbuka' => 'Terbuka', 'Tertutup' => 'Tertutup', 'Mukosa Edema' => 'Mukosa Edema', 'Polip' => 'Polip', 'Sekret' => 'Sekret', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'meatus_medius_kiri')->dropDownList([ 'Terbuka' => 'Terbuka', 'Tertutup' => 'Tertutup', 'Mukosa Edema' => 'Mukosa Edema', 'Polip' => 'Polip', 'Sekret' => 'Sekret', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'septum_kanan')->dropDownList([ 'Lurus' => 'Lurus', 'Deviasi' => 'Deviasi', 'Spina' => 'Spina', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'septum_kiri')->dropDownList([ 'Lurus' => 'Lurus', 'Deviasi' => 'Deviasi', 'Spina' => 'Spina', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nasofaring_kanan')->dropDownList([ 'Normal' => 'Normal', 'Adenoid' => 'Adenoid', 'Keradangan' => 'Keradangan', 'Massa' => 'Massa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nasofaring_kiri')->dropDownList([ 'Normal' => 'Normal', 'Adenoid' => 'Adenoid', 'Keradangan' => 'Keradangan', 'Massa' => 'Massa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lainlain_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lainlain_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesimpulan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
