<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKegiatanKelompokSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-kegiatan-kelompok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'eduId') ?>

    <?= $form->field($model, 'clubId') ?>

    <?= $form->field($model, 'namaClub') ?>

    <?= $form->field($model, 'tglPelayanan') ?>

    <?= $form->field($model, 'nmKegiatan') ?>

    <?php // echo $form->field($model, 'nmKelompok') ?>

    <?php // echo $form->field($model, 'materi') ?>

    <?php // echo $form->field($model, 'pembicara') ?>

    <?php // echo $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
