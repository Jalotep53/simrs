<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPiutangPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-piutang-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'nama_bayar') ?>

    <?= $form->field($model, 'kd_pj') ?>

    <?= $form->field($model, 'totalpiutang') ?>

    <?= $form->field($model, 'sisapiutang') ?>

    <?php // echo $form->field($model, 'tgltempo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
