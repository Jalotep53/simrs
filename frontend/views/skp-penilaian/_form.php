<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkpPenilaian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skp-penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_penilaian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_dinilai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_penilai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Proses Penilaian' => 'Proses Penilaian', 'Keluar Hasil' => 'Keluar Hasil', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
