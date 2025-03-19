<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DeteksiDiniCorona $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="deteksi-dini-corona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gejala_demam')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gejala_batuk')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gejala_sesak')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gejala_tanggal_pertama')->textInput() ?>

    <?= $form->field($model, 'gejala_riwayat_sakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gejala_riwayat_periksa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktor_riwayat_perjalanan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faktor_asal_daerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktor_tanggal_kedatangan')->textInput() ?>

    <?= $form->field($model, 'faktor_paparan_kontakpositif')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faktor_paparan_kontakpdp')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faktor_paparan_faskespositif')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faktor_paparan_perjalananln')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faktor_paparan_pasarhewan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesimpulan')->dropDownList([ 'ODP' => 'ODP', 'PDP' => 'PDP', 'OTG' => 'OTG', 'Bukan ketiganya' => 'Bukan ketiganya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tindak_lanjut')->dropDownList([ 'Rujuk' => 'Rujuk', 'Rawat Inap' => 'Rawat Inap', 'Rawat Jalan' => 'Rawat Jalan', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
