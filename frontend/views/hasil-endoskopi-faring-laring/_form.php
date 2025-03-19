<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaring $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-endoskopi-faring-laring-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kiriman_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faring_uvula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faring_arkus_faring')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faring_dinding_posterior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faring_tonsil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_tonsil_lingual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_valekula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_sinus_piriformis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_epiglotis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_arytenoid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_plika_ventrikularis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_pita_suara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_rima_vocalis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laring_lainlain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
