<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirBarcode $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parkir-barcode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_kartu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
