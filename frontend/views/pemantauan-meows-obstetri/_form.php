<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanMeowsObstetri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-meows-obstetri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'parameter_pernapasan')->dropDownList([ '>= 30' => '>= 30', '21 - 30' => '21 - 30', '11 - 20' => '11 - 20', '< 12' => '< 12', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_pernapasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_saturasi')->dropDownList([ '> 95' => '> 95', '90 - 94' => '90 - 94', '< 90' => '< 90', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_saturasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_temperatur')->dropDownList([ '> 38' => '> 38', '35 - 35.9' => '35 - 35.9', '36 - 37.9' => '36 - 37.9', '< 35' => '< 35', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_temperatur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_tekanan_darah_sistole')->dropDownList([ '> 160' => '> 160', '150 - 159' => '150 - 159', '100 - 140' => '100 - 140', '90 - 99' => '90 - 99', '< 90' => '< 90', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_tekanan_darah_sistole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_tekanan_darah_diastole')->dropDownList([ '> 110' => '> 110', '90 - 109' => '90 - 109', '< 90' => '< 90', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_tekanan_darah_diastole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_denyut_jantung')->dropDownList([ '> 120' => '> 120', '100 - 120' => '100 - 120', '51 - 99' => '51 - 99', '40 - 50' => '40 - 50', '< 40' => '< 40', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_denyut_jantung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_kesadaran')->dropDownList([ 'Alert' => 'Alert', 'Verbal' => 'Verbal', 'Pain' => 'Pain', 'Unresponsive' => 'Unresponsive', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_kesadaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_ketuban')->dropDownList([ 'Khas' => 'Khas', 'Busuk' => 'Busuk', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_ketuban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_discharge')->dropDownList([ 'Normal' => 'Normal', 'Banyak' => 'Banyak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_discharge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_proteinuria')->dropDownList([ 'Negatif' => 'Negatif', '+' => '+', '++>' => '++>', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_proteinuria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skor_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_blue')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
