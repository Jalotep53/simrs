<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkorBromagePascaAnestesi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skor-bromage-pasca-anestesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'penilaian_skala1')->dropDownList([ 'Gerakan Penuh Dari Tungkai' => 'Gerakan Penuh Dari Tungkai', 'Tidak Mampu Extensi Tungkai' => 'Tidak Mampu Extensi Tungkai', 'Tidak Mampu Flexi Lutut' => 'Tidak Mampu Flexi Lutut', 'Tidak Mampu Flexi Pergelangan Kaki' => 'Tidak Mampu Flexi Pergelangan Kaki', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penilaian_nilai1')->textInput() ?>

    <?= $form->field($model, 'keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instruksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
