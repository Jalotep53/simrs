<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsDewasa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-pews-dewasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'parameter_laju_respirasi')->dropDownList([ '<= 5' => '<= 5', '6 - 8' => '6 - 8', '9 - 11' => '9 - 11', '12 - 20' => '12 - 20', '21 - 24' => '21 - 24', '25 - 34' => '25 - 34', '>= 35' => '>= 35', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_laju_respirasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_saturasi_oksigen')->dropDownList([ '>= 95' => '>= 95', '94 - 95' => '94 - 95', '92 - 93' => '92 - 93', '<= 92' => '<= 92', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_saturasi_oksigen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_suplemen_oksigen')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_suplemen_oksigen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_tekanan_darah_sistolik')->dropDownList([ '>= 220' => '>= 220', '181 - 220' => '181 - 220', '111 - 180' => '111 - 180', '101 - 110' => '101 - 110', '91 - 100' => '91 - 100', '71 - 90' => '71 - 90', '<= 70' => '<= 70', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_tekanan_darah_sistolik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_laju_jantung')->dropDownList([ '>= 140' => '>= 140', '131 - 140' => '131 - 140', '111 - 130' => '111 - 130', '91 - 110' => '91 - 110', '51 - 90' => '51 - 90', '41 - 50' => '41 - 50', '<= 40' => '<= 40', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_laju_jantung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_kesadaran')->dropDownList([ 'Sadar' => 'Sadar', 'Nyeri/Verbal' => 'Nyeri/Verbal', 'Unrespon' => 'Unrespon', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_kesadaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_temperatur')->dropDownList([ '<= 35' => '<= 35', '35.1 - 36' => '35.1 - 36', '36.1 - 38' => '36.1 - 38', '38.1 - 39' => '38.1 - 39', '>= 39' => '>= 39', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_temperatur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skor_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
