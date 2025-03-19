<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetLemburhr $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-lemburhr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tnj')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
