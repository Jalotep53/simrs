<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-persetujuan-rawat-inap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nama_pj') ?>

    <?= $form->field($model, 'no_ktppj') ?>

    <?php // echo $form->field($model, 'pendidikan_pj') ?>

    <?php // echo $form->field($model, 'alamatpj') ?>

    <?php // echo $form->field($model, 'no_telppj') ?>

    <?php // echo $form->field($model, 'ruang') ?>

    <?php // echo $form->field($model, 'kelas') ?>

    <?php // echo $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'hak_kelas') ?>

    <?php // echo $form->field($model, 'nama_alamat_keluarga_terdekat') ?>

    <?php // echo $form->field($model, 'bayar_secara') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
