<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglRujukan')->textInput() ?>

    <?= $form->field($model, 'tglRencanaKunjungan')->textInput() ?>

    <?= $form->field($model, 'ppkDirujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_ppkDirujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jnsPelayanan')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagRujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_diagRujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipeRujukan')->dropDownList([ '0. Penuh' => '0. Penuh', '1. Partial' => '1. Partial', '2. Rujuk Balik' => '2. Rujuk Balik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'poliRujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_poliRujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
