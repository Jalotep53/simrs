<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningRawatJalan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-rawat-jalan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'geriatri')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Sadar penuh' => 'Sadar penuh', 'Tampak mengantuk/gelisah bicara tidak jelas' => 'Tampak mengantuk/gelisah bicara tidak jelas', 'Tidak sadar' => 'Tidak sadar', 'Batuk > 2 minggu' => 'Batuk > 2 minggu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pernapasan')->dropDownList([ 'Nafas normal' => 'Nafas normal', 'Tampak sesak' => 'Tampak sesak', 'Tidak bernafas' => 'Tidak bernafas', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nyeri_dada')->dropDownList([ 'Tidak ada' => 'Tidak ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skala_nyeri')->dropDownList([ 'Tidak sakit' => 'Tidak sakit', 'Sedikit sakit' => 'Sedikit sakit', 'Agak mengganggu' => 'Agak mengganggu', 'Mengganggu aktivitas' => 'Mengganggu aktivitas', 'Sangat mengganggu' => 'Sangat mengganggu', 'Tak tertahankan' => 'Tak tertahankan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keputusan')->dropDownList([ 'Sesuai antrian' => 'Sesuai antrian', 'IGD' => 'IGD', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
