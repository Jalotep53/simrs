<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KamarInapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kamar-inap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_kamar') ?>

    <?= $form->field($model, 'trf_kamar') ?>

    <?= $form->field($model, 'diagnosa_awal') ?>

    <?= $form->field($model, 'diagnosa_akhir') ?>

    <?php // echo $form->field($model, 'tgl_masuk') ?>

    <?php // echo $form->field($model, 'jam_masuk') ?>

    <?php // echo $form->field($model, 'tgl_keluar') ?>

    <?php // echo $form->field($model, 'jam_keluar') ?>

    <?php // echo $form->field($model, 'lama') ?>

    <?php // echo $form->field($model, 'ttl_biaya') ?>

    <?php // echo $form->field($model, 'stts_pulang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
