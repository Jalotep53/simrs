<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditCuciTanganMedisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-cuci-tangan-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'sebelum_menyentuh_pasien') ?>

    <?= $form->field($model, 'sebelum_tehnik_aseptik') ?>

    <?= $form->field($model, 'setelah_terpapar_cairan_tubuh_pasien') ?>

    <?php // echo $form->field($model, 'setelah_kontak_dengan_pasien') ?>

    <?php // echo $form->field($model, 'setelah_kontak_dengan_lingkungan_pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
