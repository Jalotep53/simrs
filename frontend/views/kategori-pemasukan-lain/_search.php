<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPemasukanLainSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kategori-pemasukan-lain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_kategori') ?>

    <?= $form->field($model, 'nama_kategori') ?>

    <?= $form->field($model, 'kd_rek') ?>

    <?= $form->field($model, 'kd_rek2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
