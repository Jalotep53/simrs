<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AngsuranKoperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="angsuran-koperasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tanggal_pinjam') ?>

    <?= $form->field($model, 'tanggal_angsur') ?>

    <?= $form->field($model, 'pokok') ?>

    <?= $form->field($model, 'jasa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
