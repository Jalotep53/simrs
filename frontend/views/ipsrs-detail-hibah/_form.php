<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailHibah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ipsrs-detail-hibah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_hibah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'h_hibah')->textInput() ?>

    <?= $form->field($model, 'subtotalhibah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
