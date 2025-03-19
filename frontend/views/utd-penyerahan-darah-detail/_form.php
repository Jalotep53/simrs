<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahDetail $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penyerahan-darah-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_penyerahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kantong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jasa_sarana')->textInput() ?>

    <?= $form->field($model, 'paket_bhp')->textInput() ?>

    <?= $form->field($model, 'kso')->textInput() ?>

    <?= $form->field($model, 'manajemen')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
