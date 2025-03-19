<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetTuslah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-tuslah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulan')->textInput() ?>

    <?= $form->field($model, 'pendapatan_tuslah')->textInput() ?>

    <?= $form->field($model, 'persen_rs')->textInput() ?>

    <?= $form->field($model, 'bagian_rs')->textInput() ?>

    <?= $form->field($model, 'persen_kry')->textInput() ?>

    <?= $form->field($model, 'bagian_kry')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
