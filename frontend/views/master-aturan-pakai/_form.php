<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterAturanPakai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-aturan-pakai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aturan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
