<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Kelurahan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelurahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_kel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
