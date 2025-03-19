<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanMata $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-mata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visuskanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visuskiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cckanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cckiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'palkanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'palkiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conkanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conkiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'corneakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'corneakiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coakiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pupilkanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pupilkiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lensakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lensakiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'funduskanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'funduskiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'papilkanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'papilkiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'retinakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'retinakiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'makulakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'makulakiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiokanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiokiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mbokanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mbokiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penunjang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pemeriksaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosisbdg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permasalahan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'terapi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tindakan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
