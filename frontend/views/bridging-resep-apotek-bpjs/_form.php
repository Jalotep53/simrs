<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingResepApotekBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-resep-apotek-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_sep_apotek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_sep')->textInput() ?>

    <?= $form->field($model, 'kdpoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmpoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdjenis')->dropDownList([ '1. Obat PRB' => '1. Obat PRB', '2. Obat Kronis Blm Stabil' => '2. Obat Kronis Blm Stabil', '3. Obat Kemoterapi' => '3. Obat Kemoterapi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nota_piutang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_user_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_resep')->textInput() ?>

    <?= $form->field($model, 'tgl_pelayanan')->textInput() ?>

    <?= $form->field($model, 'kodedpjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdpjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iterasi')->dropDownList([ '0. Non Iterasi' => '0. Non Iterasi', '1. Iterasi' => '1. Iterasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_kartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdppkrujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmppkpelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'byTagRsp')->textInput() ?>

    <?= $form->field($model, 'byVerRsp')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Piutang' => 'Piutang', 'Non Piutang' => 'Non Piutang', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
