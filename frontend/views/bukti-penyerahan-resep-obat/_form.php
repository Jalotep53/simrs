<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenyerahanResepObat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bukti-penyerahan-resep-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
