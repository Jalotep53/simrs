<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanSadewaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-sadewa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_nota') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'tgl_bayar') ?>

    <?php // echo $form->field($model, 'jenis_bayar') ?>

    <?php // echo $form->field($model, 'jumlah_tagihan') ?>

    <?php // echo $form->field($model, 'jumlah_bayar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
