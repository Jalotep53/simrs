<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPengambilanPenunjangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-pengambilan-penunjang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'jml') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
