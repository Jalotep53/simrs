<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhPsikiatri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-lanjutan-resiko-jatuh-psikiatri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_skala1')->dropDownList([ '-' => '-', 'Kurang Dari 50 Th' => 'Kurang Dari 50 Th', '50 - 70 Th' => '50 - 70 Th', 'Lebih Dari 70 Th' => 'Lebih Dari 70 Th', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_nilai1')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_skala2')->dropDownList([ '-' => '-', 'Kesadaran/Orientasi Baik Setiap Saat' => 'Kesadaran/Orientasi Baik Setiap Saat', 'Agitasi/Ansietas' => 'Agitasi/Ansietas', 'Kadang-kadang Bingung' => 'Kadang-kadang Bingung', 'Bingung/Disorientasi' => 'Bingung/Disorientasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_nilai2')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_skala3')->dropDownList([ '-' => '-', 'Mandiri & Mampu Mengontrol BAB/BAK' => 'Mandiri & Mampu Mengontrol BAB/BAK', 'Dower Catheter/Colostomy' => 'Dower Catheter/Colostomy', 'Eliminasi Dengan Bantuan' => 'Eliminasi Dengan Bantuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_nilai3')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_skala4')->dropDownList([ '-' => '-', 'Tanpa Obat-obatan' => 'Tanpa Obat-obatan', 'Obat-obatan Jantung' => 'Obat-obatan Jantung', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_nilai4')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_skala5')->dropDownList([ '-' => '-', 'Bipolar/Gangguan Schizoaffective' => 'Bipolar/Gangguan Schizoaffective', 'Penggunaan Obat-obatan Terlarang, Ketergantungan Alkohol' => 'Penggunaan Obat-obatan Terlarang, Ketergantungan Alkohol', 'Gangguan Depresi Mayor' => 'Gangguan Depresi Mayor', 'Demensia/Delirium' => 'Demensia/Delirium', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_nilai5')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_skala6')->dropDownList([ '-' => '-', 'Mandiri/Keseimbangan Baik/Imobilisasi' => 'Mandiri/Keseimbangan Baik/Imobilisasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_nilai6')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhedmonson_totalnilai')->textInput() ?>

    <?= $form->field($model, 'hasil_skrining')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
