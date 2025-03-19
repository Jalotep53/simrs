<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KonverSatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="konver-sat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nilai') ?>

    <?= $form->field($model, 'kode_sat') ?>

    <?= $form->field($model, 'nilai_konversi') ?>

    <?= $form->field($model, 'sat_konversi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
