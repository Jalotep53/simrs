<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanMedisPenyerahanDarah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penggunaan-medis-penyerahan-darah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_penyerahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
