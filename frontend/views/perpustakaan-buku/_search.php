<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBukuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-buku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_buku') ?>

    <?= $form->field($model, 'judul_buku') ?>

    <?= $form->field($model, 'jml_halaman') ?>

    <?= $form->field($model, 'kode_penerbit') ?>

    <?= $form->field($model, 'kode_pengarang') ?>

    <?php // echo $form->field($model, 'thn_terbit') ?>

    <?php // echo $form->field($model, 'isbn') ?>

    <?php // echo $form->field($model, 'id_kategori') ?>

    <?php // echo $form->field($model, 'id_jenis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
