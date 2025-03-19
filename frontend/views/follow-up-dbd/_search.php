<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\FollowUpDbdSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="follow-up-dbd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'hemoglobin') ?>

    <?= $form->field($model, 'hematokrit') ?>

    <?php // echo $form->field($model, 'leokosit') ?>

    <?php // echo $form->field($model, 'trombosit') ?>

    <?php // echo $form->field($model, 'terapi_cairan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
