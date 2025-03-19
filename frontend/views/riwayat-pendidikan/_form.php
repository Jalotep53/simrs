<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPendidikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'pendidikan')->dropDownList([ 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'SMK' => 'SMK', 'D I' => 'D I', 'D II' => 'D II', 'D III' => 'D III', 'D IV' => 'D IV', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', 'Post Doctor' => 'Post Doctor', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thn_lulus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendanaan')->dropDownList([ 'Biaya Sendiri' => 'Biaya Sendiri', 'Biaya Instansi Sendiri' => 'Biaya Instansi Sendiri', 'Lembaga Swasta Kerjasama' => 'Lembaga Swasta Kerjasama', 'Lembaga Swasta Kompetisi' => 'Lembaga Swasta Kompetisi', 'Lembaga Pemerintah Kerjasama' => 'Lembaga Pemerintah Kerjasama', 'Lembaga Pemerintah Kompetisi' => 'Lembaga Pemerintah Kompetisi', 'Lembaga Internasional' => 'Lembaga Internasional', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
