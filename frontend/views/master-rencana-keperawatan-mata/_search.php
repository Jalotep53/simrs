<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanMataSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-rencana-keperawatan-mata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_masalah') ?>

    <?= $form->field($model, 'kode_rencana') ?>

    <?= $form->field($model, 'rencana_keperawatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
