<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ObatbhpOkSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obatbhp-ok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_obat') ?>

    <?= $form->field($model, 'nm_obat') ?>

    <?= $form->field($model, 'kode_sat') ?>

    <?= $form->field($model, 'hargasatuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
