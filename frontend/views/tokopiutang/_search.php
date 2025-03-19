<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TokopiutangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tokopiutang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nota_piutang') ?>

    <?= $form->field($model, 'tgl_piutang') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'no_member') ?>

    <?= $form->field($model, 'nm_member') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'jns_jual') ?>

    <?php // echo $form->field($model, 'ongkir') ?>

    <?php // echo $form->field($model, 'uangmuka') ?>

    <?php // echo $form->field($model, 'sisapiutang') ?>

    <?php // echo $form->field($model, 'tgltempo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
