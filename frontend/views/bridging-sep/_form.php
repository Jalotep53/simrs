<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSep $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-sep-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglsep')->textInput() ?>

    <?= $form->field($model, 'tglrujukan')->textInput() ?>

    <?= $form->field($model, 'no_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdppkrujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmppkrujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdppkpelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmppkpelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jnspelayanan')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagawal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdiagnosaawal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdpolitujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmpolitujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klsrawat')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'klsnaik')->dropDownList([ '' => '', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pembiayaan')->dropDownList([ '' => '', 1 => '1', 2 => '2', 3 => '3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pjnaikkelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lakalantas')->dropDownList([ '0', '1', '2', '3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jkel')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_kartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglpulang')->textInput() ?>

    <?= $form->field($model, 'asal_rujukan')->dropDownList([ '1. Faskes 1' => '1. Faskes 1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eksekutif')->dropDownList([ '0. Tidak' => '0. Tidak', '1.Ya' => '1.Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cob')->dropDownList([ '0. Tidak' => '0. Tidak', '1.Ya' => '1.Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'notelep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'katarak')->dropDownList([ '0. Tidak' => '0. Tidak', '1.Ya' => '1.Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tglkkl')->textInput() ?>

    <?= $form->field($model, 'keterangankkl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suplesi')->dropDownList([ '0. Tidak' => '0. Tidak', '1.Ya' => '1.Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_sep_suplesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdprop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmprop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmkab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdkec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmkec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noskdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kddpjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdpdjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuankunjungan')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'flagprosedur')->dropDownList([ '' => '', 0 => '0', 1 => '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penunjang')->dropDownList([ '' => '', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'asesmenpelayanan')->dropDownList([ '' => '', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kddpjplayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdpjplayanan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
