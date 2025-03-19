<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisHibah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-hibah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_hibah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pemberi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_hibah')->textInput() ?>

    <?= $form->field($model, 'totalhibah')->textInput() ?>

    <?= $form->field($model, 'kd_rek_aset')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
