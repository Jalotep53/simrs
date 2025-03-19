<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKegiatanKelompok $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-kegiatan-kelompok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eduId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clubId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaClub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPelayanan')->textInput() ?>

    <?= $form->field($model, 'nmKegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmKelompok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembicara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
