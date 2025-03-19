<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TelaahFarmasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="telaah-farmasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_identifikasi_pasien')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_identifikasi_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_tepat_obat')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_tepat_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_tepat_dosis')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_tepat_dosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_tepat_cara_pemberian')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_tepat_cara_pemberian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_tepat_waktu_pemberian')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_tepat_waktu_pemberian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_ada_tidak_duplikasi_obat')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_ada_tidak_duplikasi_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_interaksi_obat')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_interaksi_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resep_kontra_indikasi_obat')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resep_ket_kontra_indikasi_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_tepat_pasien')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'obat_tepat_obat')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'obat_tepat_dosis')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'obat_tepat_cara_pemberian')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'obat_tepat_waktu_pemberian')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
