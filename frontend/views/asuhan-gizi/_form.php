<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AsuhanGizi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="asuhan-gizi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'antropometri_bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_imt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_lla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_tl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_ulna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_bbideal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_bbperu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_tbperu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_bbpertb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antropometri_llaperu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biokimia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi_telur')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_susu_sapi')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_kacang')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_gluten')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_udang')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_ikan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_hazelnut')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pola_makan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intervensi_gizi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitoring_evaluasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
