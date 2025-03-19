<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLabpa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-labpa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noorder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_permintaan')->textInput() ?>

    <?= $form->field($model, 'jam_permintaan')->textInput() ?>

    <?= $form->field($model, 'tgl_sampel')->textInput() ?>

    <?= $form->field($model, 'jam_sampel')->textInput() ?>

    <?= $form->field($model, 'tgl_hasil')->textInput() ?>

    <?= $form->field($model, 'jam_hasil')->textInput() ?>

    <?= $form->field($model, 'dokter_perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'ralan' => 'Ralan', 'ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'informasi_tambahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengambilan_bahan')->textInput() ?>

    <?= $form->field($model, 'diperoleh_dengan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_jaringan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diawetkan_dengan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pernah_dilakukan_di')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pa_sebelumnya')->textInput() ?>

    <?= $form->field($model, 'nomor_pa_sebelumnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_pa_sebelumnya')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
