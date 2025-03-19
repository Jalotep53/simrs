<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekonsiliasi-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rekonsiliasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_wawancara')->textInput() ?>

    <?= $form->field($model, 'rekonsiliasi_obat_saat')->dropDownList([ 'Admisi' => 'Admisi', 'Transfer Antar Ruang' => 'Transfer Antar Ruang', 'Pindah Faskes Lain' => 'Pindah Faskes Lain', 'Pulang' => 'Pulang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manifestasi_alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dampak_alergi')->dropDownList([ '-' => '-', 'Ringan' => 'Ringan', 'Sedang' => 'Sedang', 'Berat' => 'Berat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
