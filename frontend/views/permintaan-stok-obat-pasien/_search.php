<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanStokObatPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-stok-obat-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_permintaan') ?>

    <?= $form->field($model, 'tgl_permintaan') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tgl_validasi') ?>

    <?php // echo $form->field($model, 'jam_validasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
