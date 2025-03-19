<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Jurnal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jurnal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_jurnal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bukti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_jurnal')->textInput() ?>

    <?= $form->field($model, 'jam_jurnal')->textInput() ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'U' => 'U', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
