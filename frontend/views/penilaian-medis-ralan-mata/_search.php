<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanMataSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-mata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'keluhan_utama') ?>

    <?php // echo $form->field($model, 'rps') ?>

    <?php // echo $form->field($model, 'rpd') ?>

    <?php // echo $form->field($model, 'rpo') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'visuskanan') ?>

    <?php // echo $form->field($model, 'visuskiri') ?>

    <?php // echo $form->field($model, 'cckanan') ?>

    <?php // echo $form->field($model, 'cckiri') ?>

    <?php // echo $form->field($model, 'palkanan') ?>

    <?php // echo $form->field($model, 'palkiri') ?>

    <?php // echo $form->field($model, 'conkanan') ?>

    <?php // echo $form->field($model, 'conkiri') ?>

    <?php // echo $form->field($model, 'corneakanan') ?>

    <?php // echo $form->field($model, 'corneakiri') ?>

    <?php // echo $form->field($model, 'coakanan') ?>

    <?php // echo $form->field($model, 'coakiri') ?>

    <?php // echo $form->field($model, 'pupilkanan') ?>

    <?php // echo $form->field($model, 'pupilkiri') ?>

    <?php // echo $form->field($model, 'lensakanan') ?>

    <?php // echo $form->field($model, 'lensakiri') ?>

    <?php // echo $form->field($model, 'funduskanan') ?>

    <?php // echo $form->field($model, 'funduskiri') ?>

    <?php // echo $form->field($model, 'papilkanan') ?>

    <?php // echo $form->field($model, 'papilkiri') ?>

    <?php // echo $form->field($model, 'retinakanan') ?>

    <?php // echo $form->field($model, 'retinakiri') ?>

    <?php // echo $form->field($model, 'makulakanan') ?>

    <?php // echo $form->field($model, 'makulakiri') ?>

    <?php // echo $form->field($model, 'tiokanan') ?>

    <?php // echo $form->field($model, 'tiokiri') ?>

    <?php // echo $form->field($model, 'mbokanan') ?>

    <?php // echo $form->field($model, 'mbokiri') ?>

    <?php // echo $form->field($model, 'lab') ?>

    <?php // echo $form->field($model, 'rad') ?>

    <?php // echo $form->field($model, 'penunjang') ?>

    <?php // echo $form->field($model, 'tes') ?>

    <?php // echo $form->field($model, 'pemeriksaan') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'diagnosisbdg') ?>

    <?php // echo $form->field($model, 'permasalahan') ?>

    <?php // echo $form->field($model, 'terapi') ?>

    <?php // echo $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
