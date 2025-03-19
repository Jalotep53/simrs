<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Penyakit $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penyakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciri_ciri')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_ktg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Menular' => 'Menular', 'Tidak Menular' => 'Tidak Menular', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
