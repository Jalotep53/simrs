<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DatabarangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="databarang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'nama_brng') ?>

    <?= $form->field($model, 'kode_satbesar') ?>

    <?= $form->field($model, 'kode_sat') ?>

    <?= $form->field($model, 'letak_barang') ?>

    <?php // echo $form->field($model, 'dasar') ?>

    <?php // echo $form->field($model, 'h_beli') ?>

    <?php // echo $form->field($model, 'ralan') ?>

    <?php // echo $form->field($model, 'kelas1') ?>

    <?php // echo $form->field($model, 'kelas2') ?>

    <?php // echo $form->field($model, 'kelas3') ?>

    <?php // echo $form->field($model, 'utama') ?>

    <?php // echo $form->field($model, 'vip') ?>

    <?php // echo $form->field($model, 'vvip') ?>

    <?php // echo $form->field($model, 'beliluar') ?>

    <?php // echo $form->field($model, 'jualbebas') ?>

    <?php // echo $form->field($model, 'karyawan') ?>

    <?php // echo $form->field($model, 'stokminimal') ?>

    <?php // echo $form->field($model, 'kdjns') ?>

    <?php // echo $form->field($model, 'isi') ?>

    <?php // echo $form->field($model, 'kapasitas') ?>

    <?php // echo $form->field($model, 'expire') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kode_industri') ?>

    <?php // echo $form->field($model, 'kode_kategori') ?>

    <?php // echo $form->field($model, 'kode_golongan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
