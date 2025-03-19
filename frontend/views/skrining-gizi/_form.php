<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningGizi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-gizi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'skrining_bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skrining_tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_imt')->dropDownList([ 'IMT > 20/z score > 2' => 'IMT > 20/z score > 2', 'IMT 18,5-20/-2 =< z score =< 2' => 'IMT 18,5-20/-2 =< z score =< 2', 'IMT < 18,5/z score < -2' => 'IMT < 18,5/z score < -2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_imt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_bb')->dropDownList([ 'BB Hilang < 5%' => 'BB Hilang < 5%', 'BB Hilang 5 - 10 %' => 'BB Hilang 5 - 10 %', 'BB Hilang > 10 %' => 'BB Hilang > 10 %', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_penyakit')->dropDownList([ 'Ada asupan nutrisi > 5 hari' => 'Ada asupan nutrisi > 5 hari', 'Tidak ada asupan nutrisi > 5 hari' => 'Tidak ada asupan nutrisi > 5 hari', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skor_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
