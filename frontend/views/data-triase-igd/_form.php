<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgd $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_kunjungan')->textInput() ?>

    <?= $form->field($model, 'cara_masuk')->dropDownList([ 'Jalan' => 'Jalan', 'Brankar' => 'Brankar', 'Kursi Roda' => 'Kursi Roda', 'Digendong' => 'Digendong', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alat_transportasi')->dropDownList([ '-' => '-', 'AGD' => 'AGD', 'Sendiri' => 'Sendiri', 'Swasta' => 'Swasta', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alasan_kedatangan')->dropDownList([ 'Datang Sendiri' => 'Datang Sendiri', 'Polisi' => 'Polisi', 'Rujukan' => 'Rujukan', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kedatangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kasus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tekanan_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pernapasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saturasi_o2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
