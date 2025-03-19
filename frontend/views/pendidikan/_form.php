<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Pendidikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tingkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indek')->textInput() ?>

    <?= $form->field($model, 'gapok1')->textInput() ?>

    <?= $form->field($model, 'kenaikan')->textInput() ?>

    <?= $form->field($model, 'maksimal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
