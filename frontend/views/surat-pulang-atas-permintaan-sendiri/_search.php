<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-pulang-atas-permintaan-sendiri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_pulang') ?>

    <?= $form->field($model, 'rs_pilihan') ?>

    <?= $form->field($model, 'nama_pj') ?>

    <?php // echo $form->field($model, 'lahir') ?>

    <?php // echo $form->field($model, 'umur') ?>

    <?php // echo $form->field($model, 'jkpj') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'saksi_keluarga') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
