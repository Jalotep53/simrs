<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SettingSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_instansi') ?>

    <?= $form->field($model, 'alamat_instansi') ?>

    <?= $form->field($model, 'kabupaten') ?>

    <?= $form->field($model, 'propinsi') ?>

    <?= $form->field($model, 'kontak') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'aktifkan') ?>

    <?php // echo $form->field($model, 'kode_ppk') ?>

    <?php // echo $form->field($model, 'kode_ppkinhealth') ?>

    <?php // echo $form->field($model, 'kode_ppkkemenkes') ?>

    <?php // echo $form->field($model, 'wallpaper') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
