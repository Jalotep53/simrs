<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Spesialis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spesialis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_sps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_sps')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
