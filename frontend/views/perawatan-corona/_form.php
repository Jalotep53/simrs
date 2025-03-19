<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerawatanCorona $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perawatan-corona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemulasaraan_jenazah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kantong_jenazah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'peti_jenazah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'plastik_erat')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'desinfektan_jenazah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mobil_jenazah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'desinfektan_mobil_jenazah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'covid19_status_cd')->dropDownList([ 'ODP' => 'ODP', 'PDP' => 'PDP', 'Positif' => 'Positif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nomor_kartu_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'episodes1')->textInput() ?>

    <?= $form->field($model, 'episodes2')->textInput() ?>

    <?= $form->field($model, 'episodes3')->textInput() ?>

    <?= $form->field($model, 'episodes4')->textInput() ?>

    <?= $form->field($model, 'episodes5')->textInput() ?>

    <?= $form->field($model, 'episodes6')->textInput() ?>

    <?= $form->field($model, 'covid19_cc_ind')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
