<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-masuk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_urut') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'asal') ?>

    <?= $form->field($model, 'tujuan') ?>

    <?= $form->field($model, 'tgl_surat') ?>

    <?php // echo $form->field($model, 'perihal') ?>

    <?php // echo $form->field($model, 'tgl_terima') ?>

    <?php // echo $form->field($model, 'kd_lemari') ?>

    <?php // echo $form->field($model, 'kd_rak') ?>

    <?php // echo $form->field($model, 'kd_map') ?>

    <?php // echo $form->field($model, 'kd_ruang') ?>

    <?php // echo $form->field($model, 'kd_sifat') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <?php // echo $form->field($model, 'tembusan') ?>

    <?php // echo $form->field($model, 'tgl_deadline_balas') ?>

    <?php // echo $form->field($model, 'kd_balas') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'kd_status') ?>

    <?php // echo $form->field($model, 'kd_klasifikasi') ?>

    <?php // echo $form->field($model, 'file_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
