<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Potongan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potongan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulan')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'bpjs')->textInput() ?>

    <?= $form->field($model, 'jamsostek')->textInput() ?>

    <?= $form->field($model, 'dansos')->textInput() ?>

    <?= $form->field($model, 'simwajib')->textInput() ?>

    <?= $form->field($model, 'angkop')->textInput() ?>

    <?= $form->field($model, 'angla')->textInput() ?>

    <?= $form->field($model, 'telpri')->textInput() ?>

    <?= $form->field($model, 'pajak')->textInput() ?>

    <?= $form->field($model, 'pribadi')->textInput() ?>

    <?= $form->field($model, 'lain')->textInput() ?>

    <?= $form->field($model, 'ktg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
