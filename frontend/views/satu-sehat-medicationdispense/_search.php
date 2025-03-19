<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationdispenseSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-medicationdispense-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <?php // echo $form->field($model, 'id_medicationdispanse') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
