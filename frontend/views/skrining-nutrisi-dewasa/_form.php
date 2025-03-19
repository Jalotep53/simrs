<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiDewasa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-nutrisi-dewasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sg1')->dropDownList([ 'Tidak' => 'Tidak', 'Tidak Yakin' => 'Tidak Yakin', 'Ya, 1-5 Kg' => 'Ya, 1-5 Kg', 'Ya, 6-10 Kg' => 'Ya, 6-10 Kg', 'Ya, 11-15 Kg' => 'Ya, 11-15 Kg', 'Ya, >15 Kg' => 'Ya, >15 Kg', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai1')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg2')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai2')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'total_hasil')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
