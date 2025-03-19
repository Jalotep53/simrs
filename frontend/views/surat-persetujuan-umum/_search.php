<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmumSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-persetujuan-umum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'pengobatan_kepada') ?>

    <?= $form->field($model, 'nilai_kepercayaan') ?>

    <?php // echo $form->field($model, 'nama_pj') ?>

    <?php // echo $form->field($model, 'umur_pj') ?>

    <?php // echo $form->field($model, 'no_ktppj') ?>

    <?php // echo $form->field($model, 'jkpj') ?>

    <?php // echo $form->field($model, 'bertindak_atas') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
