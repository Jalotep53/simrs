<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhDewasa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-lanjutan-resiko-jatuh-dewasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala1')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai1')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala2')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai2')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala3')->dropDownList([ 'Tidak Ada/Kursi Roda/Perawat/Tirah Baring' => 'Tidak Ada/Kursi Roda/Perawat/Tirah Baring', 'Tongkat/Alat Penopang' => 'Tongkat/Alat Penopang', 'Berpegangan Pada Perabot' => 'Berpegangan Pada Perabot', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai3')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala4')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai4')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala5')->dropDownList([ 'Normal/Tirah Baring/Imobilisasi' => 'Normal/Tirah Baring/Imobilisasi', 'Lemah' => 'Lemah', 'Terganggu' => 'Terganggu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai5')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala6')->dropDownList([ 'Sadar Akan Kemampuan Diri Sendiri' => 'Sadar Akan Kemampuan Diri Sendiri', 'Sering Lupa Akan Keterbatasan Yang Dimiliki' => 'Sering Lupa Akan Keterbatasan Yang Dimiliki', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai6')->textInput() ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_totalnilai')->textInput() ?>

    <?= $form->field($model, 'hasil_skrining')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
