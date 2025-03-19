<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmumSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-pernyataan-pasien-umum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nama_pj') ?>

    <?= $form->field($model, 'no_ktppj') ?>

    <?php // echo $form->field($model, 'tempat_lahirpj') ?>

    <?php // echo $form->field($model, 'lahirpj') ?>

    <?php // echo $form->field($model, 'jkpj') ?>

    <?php // echo $form->field($model, 'alamatpj') ?>

    <?php // echo $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
