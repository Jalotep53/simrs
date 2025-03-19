<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataHAIs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-hais-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ETT')->textInput() ?>

    <?= $form->field($model, 'CVL')->textInput() ?>

    <?= $form->field($model, 'IVL')->textInput() ?>

    <?= $form->field($model, 'UC')->textInput() ?>

    <?= $form->field($model, 'VAP')->textInput() ?>

    <?= $form->field($model, 'IAD')->textInput() ?>

    <?= $form->field($model, 'PLEB')->textInput() ?>

    <?= $form->field($model, 'ISK')->textInput() ?>

    <?= $form->field($model, 'ILO')->textInput() ?>

    <?= $form->field($model, 'HAP')->textInput() ?>

    <?= $form->field($model, 'Tinea')->textInput() ?>

    <?= $form->field($model, 'Scabies')->textInput() ?>

    <?= $form->field($model, 'DEKU')->dropDownList([ 'IYA' => 'IYA', 'TIDAK' => 'TIDAK', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'SPUTUM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DARAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'URINE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ANTIBIOTIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
