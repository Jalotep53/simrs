<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikanJual $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-obat-racikan-jual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_jual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
