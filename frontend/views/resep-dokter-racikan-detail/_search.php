<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResepDokterRacikanDetailSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resep-dokter-racikan-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_resep') ?>

    <?= $form->field($model, 'no_racik') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'p1') ?>

    <?= $form->field($model, 'p2') ?>

    <?php // echo $form->field($model, 'kandungan') ?>

    <?php // echo $form->field($model, 'jml') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
