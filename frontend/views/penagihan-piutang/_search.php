<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenagihanPiutangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penagihan-piutang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_tagihan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'tanggaltempo') ?>

    <?= $form->field($model, 'tempo') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'nip_menyetujui') ?>

    <?php // echo $form->field($model, 'kd_pj') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
