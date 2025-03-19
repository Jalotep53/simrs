<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MonitoringReaksiTranfusiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="monitoring-reaksi-tranfusi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'produk_darah') ?>

    <?= $form->field($model, 'no_kantong') ?>

    <?php // echo $form->field($model, 'lokasi_insersi') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'hr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'jenis_reaksi_alergi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
