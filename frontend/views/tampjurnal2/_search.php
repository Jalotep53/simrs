<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal2Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tampjurnal2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_rek') ?>

    <?= $form->field($model, 'nm_rek') ?>

    <?= $form->field($model, 'debet') ?>

    <?= $form->field($model, 'kredit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
