<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPersalinanPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-persalinan-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'tgl_thn') ?>

    <?= $form->field($model, 'tempat_persalinan') ?>

    <?= $form->field($model, 'usia_hamil') ?>

    <?= $form->field($model, 'jenis_persalinan') ?>

    <?php // echo $form->field($model, 'penolong') ?>

    <?php // echo $form->field($model, 'penyulit') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'bbpb') ?>

    <?php // echo $form->field($model, 'keadaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
