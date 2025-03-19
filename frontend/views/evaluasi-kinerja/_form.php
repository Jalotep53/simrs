<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\EvaluasiKinerja $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="evaluasi-kinerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_evaluasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_evaluasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indek')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
