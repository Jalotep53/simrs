<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal2 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tampjurnal2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debet')->textInput() ?>

    <?= $form->field($model, 'kredit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
