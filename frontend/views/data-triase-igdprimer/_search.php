<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdprimerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igdprimer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'keluhan_utama') ?>

    <?= $form->field($model, 'kebutuhan_khusus') ?>

    <?= $form->field($model, 'catatan') ?>

    <?= $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'tanggaltriase') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
