<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala5 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-triase-skala5-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_skala5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengkajian_skala5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
