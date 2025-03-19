<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\GolonganTni $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="golongan-tni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_golongan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
