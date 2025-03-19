<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterPcareSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-dokter-pcare-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'kd_dokter_pcare') ?>

    <?= $form->field($model, 'nm_dokter_pcare') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
