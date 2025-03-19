<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisTitipFaktur $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-titip-faktur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ditagihkan' => 'Ditagihkan', 'Dibayar' => 'Dibayar', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
