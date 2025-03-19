<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPenerbitSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-penerbit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_penerbit') ?>

    <?= $form->field($model, 'nama_penerbit') ?>

    <?= $form->field($model, 'alamat_penerbit') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'website_penerbit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
