<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPenangananDarahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-penanganan-darah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'menggunakan_apd_waktu_membuang_darah') ?>

    <?= $form->field($model, 'komponen_darah_tidak_ada_dilantai') ?>

    <?= $form->field($model, 'membuang_darah_pada_tempat_ditentukan') ?>

    <?php // echo $form->field($model, 'pembersihan_areal_tumbahan_darah') ?>

    <?php // echo $form->field($model, 'apd_dibuang_di_limbah_infeksius') ?>

    <?php // echo $form->field($model, 'melakukan_kebersihan_tangan_setelah_prosedur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
