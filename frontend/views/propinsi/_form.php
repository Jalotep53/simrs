<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Propinsi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="propinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_prop')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
