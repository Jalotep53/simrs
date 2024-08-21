<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPemberianObatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-pemberian-obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'h_beli') ?>

    <?php // echo $form->field($model, 'biaya_obat') ?>

    <?php // echo $form->field($model, 'jml') ?>

    <?php // echo $form->field($model, 'embalase') ?>

    <?php // echo $form->field($model, 'tuslah') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kd_bangsal') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
