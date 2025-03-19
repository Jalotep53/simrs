<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanEbookSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-ebook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_ebook') ?>

    <?= $form->field($model, 'judul_ebook') ?>

    <?= $form->field($model, 'jml_halaman') ?>

    <?= $form->field($model, 'kode_penerbit') ?>

    <?= $form->field($model, 'kode_pengarang') ?>

    <?php // echo $form->field($model, 'thn_terbit') ?>

    <?php // echo $form->field($model, 'id_kategori') ?>

    <?php // echo $form->field($model, 'id_jenis') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
