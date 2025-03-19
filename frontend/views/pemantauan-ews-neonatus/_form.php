<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanEwsNeonatus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-ews-neonatus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'parameter1')->dropDownList([ '<= 29' => '<= 29', '30 - 39' => '30 - 39', '40 - 60' => '40 - 60', '>= 61' => '>= 61', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter2')->dropDownList([ '<= 90' => '<= 90', '90 - 93' => '90 - 93', '>= 94' => '>= 94', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter3')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter4')->dropDownList([ '<= 80' => '<= 80', '81 - 119' => '81 - 119', '120 - 160' => '120 - 160', '161 - 180' => '161 - 180', '>= 181' => '>= 181', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter5')->dropDownList([ 'Berat' => 'Berat', 'Ringan' => 'Ringan', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter6')->dropDownList([ '>= 3 Detik' => '>= 3 Detik', '<= 3 Detik' => '<= 3 Detik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter7')->dropDownList([ '<= 36,5' => '<= 36,5', '36,5 - 37,5' => '36,5 - 37,5', '>= 37,5' => '>= 37,5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter8')->dropDownList([ 'Pink' => 'Pink', 'Pucat' => 'Pucat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skor_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_blue')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
