<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhGeriatri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-lanjutan-resiko-jatuh-geriatri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala1')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai1')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala2')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai2')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala3')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai3')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala4')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai4')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala5')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai5')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala6')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai6')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala7')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai7')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala8')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai8')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala9')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai9')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala10')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai10')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_skala11')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai11')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuh_totalnilai')->textInput() ?>

    <?= $form->field($model, 'hasil_skrining')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
