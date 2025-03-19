<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdPapuaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-bpd-papua-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'umurdaftar') ?>

    <?php // echo $form->field($model, 'tgl_registrasi') ?>

    <?php // echo $form->field($model, 'no_nota') ?>

    <?php // echo $form->field($model, 'besar_bayar') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'no_rawat') ?>

    <?php // echo $form->field($model, 'status_lanjut') ?>

    <?php // echo $form->field($model, 'tgl_closing') ?>

    <?php // echo $form->field($model, 'status_bayar') ?>

    <?php // echo $form->field($model, 'kasir') ?>

    <?php // echo $form->field($model, 'diupdatebank') ?>

    <?php // echo $form->field($model, 'referensi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
