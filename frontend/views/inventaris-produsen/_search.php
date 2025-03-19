<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisProdusenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-produsen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_produsen') ?>

    <?= $form->field($model, 'nama_produsen') ?>

    <?= $form->field($model, 'alamat_produsen') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'website_produsen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
