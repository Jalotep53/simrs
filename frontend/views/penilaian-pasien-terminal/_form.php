<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienTerminal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-terminal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum')->dropDownList([ 'Sedang' => 'Sedang', 'Jelek' => 'Jelek', 'Sangat Jelek' => 'Sangat Jelek', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Delirium' => 'Delirium', 'Samnolen' => 'Samnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skala_nyeri')->dropDownList([ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahap_pasien_menjelang_ajal')->dropDownList([ 'Menolak' => 'Menolak', 'Marah' => 'Marah', 'Menawar' => 'Menawar', 'Depresi' => 'Depresi', 'Menerima' => 'Menerima', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanda_klinis_menjelang_kematian')->dropDownList([ 'Kurang/Tidak Responsif' => 'Kurang/Tidak Responsif', 'Nadi Cepat & Melemah' => 'Nadi Cepat & Melemah', 'Pernapasan Tidak Teratur & Dangkal/Ngorok' => 'Pernapasan Tidak Teratur & Dangkal/Ngorok', 'Kulit Pucat' => 'Kulit Pucat', 'Ekstrimitas Dingin' => 'Ekstrimitas Dingin', 'Defekasi/Berkemih Tidak Sengaja' => 'Defekasi/Berkemih Tidak Sengaja', 'Mata Tidak Respon Cahaya' => 'Mata Tidak Respon Cahaya', 'Penurunan Tonus Otot' => 'Penurunan Tonus Otot', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kebutuhan_spiritual_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
