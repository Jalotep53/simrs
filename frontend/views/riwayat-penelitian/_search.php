<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenelitianSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-penelitian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jenis_penelitian') ?>

    <?= $form->field($model, 'peranan') ?>

    <?= $form->field($model, 'judul_penelitian') ?>

    <?= $form->field($model, 'judul_jurnal') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'biaya_penelitian') ?>

    <?php // echo $form->field($model, 'asal_dana') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
