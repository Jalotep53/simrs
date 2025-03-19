<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanObstetriRanap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemeriksaan-obstetri-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'tinggi_uteri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'janin')->dropDownList([ 'Tunggal' => 'Tunggal', 'Gemelli' => 'Gemelli', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'letak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panggul')->dropDownList([ '-' => '-', '5/5' => '5/5', '4/5' => '4/5', '3/5' => '3/5', '2/5' => '2/5', '1/5' => '1/5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'denyut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontraksi')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kualitas_mnt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kualitas_dtk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fluksus')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'albus')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'vulva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'portio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dalam')->dropDownList([ 'Kenyal' => 'Kenyal', 'Lunak' => 'Lunak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tebal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arah')->dropDownList([ 'depan' => 'Depan', 'axial' => 'Axial', 'belakang' => 'Belakang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pembukaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penurunan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'denominator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ketuban')->dropDownList([ '-' => '-', '+' => '+', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'feto')->dropDownList([ 'Normal' => 'Normal', 'Susp.CPD-FPD' => 'Susp.CPD-FPD', 'CPD-FPD' => 'CPD-FPD', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
