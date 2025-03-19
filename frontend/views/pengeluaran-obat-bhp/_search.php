<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranObatBhpSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengeluaran-obat-bhp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_keluar') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'kd_bangsal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
