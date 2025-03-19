<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingTindakanPcareSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-tindakan-pcare-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'kd_tindakan_pcare') ?>

    <?= $form->field($model, 'nm_tindakan_pcare') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
