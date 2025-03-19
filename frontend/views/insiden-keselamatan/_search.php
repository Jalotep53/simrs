<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InsidenKeselamatanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="insiden-keselamatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_insiden') ?>

    <?= $form->field($model, 'nama_insiden') ?>

    <?= $form->field($model, 'jenis_insiden') ?>

    <?= $form->field($model, 'dampak') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
