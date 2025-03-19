<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienTerminalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-terminal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'rps') ?>

    <?= $form->field($model, 'rpd') ?>

    <?php // echo $form->field($model, 'keadaan_umum') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'spo2') ?>

    <?php // echo $form->field($model, 'skala_nyeri') ?>

    <?php // echo $form->field($model, 'tahap_pasien_menjelang_ajal') ?>

    <?php // echo $form->field($model, 'tanda_klinis_menjelang_kematian') ?>

    <?php // echo $form->field($model, 'kebutuhan_spiritual_pasien') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
