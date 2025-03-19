<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPemisahanKomponenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penggunaan-penunjang-pemisahan-komponen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_donor') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'jml') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
