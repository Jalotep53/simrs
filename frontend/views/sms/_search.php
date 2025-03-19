<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SmsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pesan') ?>

    <?= $form->field($model, 'sms_masuk') ?>

    <?= $form->field($model, 'no_hp') ?>

    <?= $form->field($model, 'pdu_pesan') ?>

    <?= $form->field($model, 'encoding') ?>

    <?php // echo $form->field($model, 'id_gateway') ?>

    <?php // echo $form->field($model, 'tgl_sms') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
