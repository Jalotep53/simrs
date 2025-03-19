<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala4Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-triase-skala4-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_pemeriksaan') ?>

    <?= $form->field($model, 'kode_skala4') ?>

    <?= $form->field($model, 'pengkajian_skala4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
