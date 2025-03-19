<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanBerkas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peminjaman-berkas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pinjam')->textInput() ?>

    <?= $form->field($model, 'tgl_kembali')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pinjam')->dropDownList([ 'Masih Dipinjam' => 'Masih Dipinjam', 'Sudah Kembali' => 'Sudah Kembali', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
