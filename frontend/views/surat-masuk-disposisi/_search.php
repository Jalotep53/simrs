<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukDisposisiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-masuk-disposisi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_disposisi') ?>

    <?= $form->field($model, 'kd_indeks') ?>

    <?= $form->field($model, 'no_urut') ?>

    <?= $form->field($model, 'tgl_selesai') ?>

    <?= $form->field($model, 'isi') ?>

    <?php // echo $form->field($model, 'diteruskan') ?>

    <?php // echo $form->field($model, 'tgl_kembali') ?>

    <?php // echo $form->field($model, 'kepada') ?>

    <?php // echo $form->field($model, 'pengesahan') ?>

    <?php // echo $form->field($model, 'harap') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
