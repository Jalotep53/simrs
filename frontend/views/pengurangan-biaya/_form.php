<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenguranganBiaya $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengurangan-biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pengurangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_pengurangan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
