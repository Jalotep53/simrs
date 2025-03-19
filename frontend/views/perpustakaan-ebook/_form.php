<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanEbook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-ebook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_ebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_ebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_halaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_penerbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pengarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thn_terbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
