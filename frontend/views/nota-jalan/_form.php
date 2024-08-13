<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\NotaJalan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="nota-jalan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_nota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
