<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resep-luar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_resep') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'tgl_peresepan') ?>

    <?php // echo $form->field($model, 'jam_peresepan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
