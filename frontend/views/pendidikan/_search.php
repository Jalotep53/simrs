<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PendidikanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pendidikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tingkat') ?>

    <?= $form->field($model, 'indek') ?>

    <?= $form->field($model, 'gapok1') ?>

    <?= $form->field($model, 'kenaikan') ?>

    <?= $form->field($model, 'maksimal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
