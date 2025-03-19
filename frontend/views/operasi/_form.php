<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Operasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="operasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_operasi')->textInput() ?>

    <?= $form->field($model, 'jenis_anasthesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori')->dropDownList([ '-' => '-', 'Khusus' => 'Khusus', 'Besar' => 'Besar', 'Sedang' => 'Sedang', 'Kecil' => 'Kecil', 'Elektive' => 'Elektive', 'Emergency' => 'Emergency', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'operator1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asisten_operator1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asisten_operator2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asisten_operator3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_anak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perawaat_resusitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asisten_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asisten_anestesi2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidan3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perawat_luar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omloop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omloop2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omloop3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omloop4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omloop5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_pjanak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_umum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biayaoperator1')->textInput() ?>

    <?= $form->field($model, 'biayaoperator2')->textInput() ?>

    <?= $form->field($model, 'biayaoperator3')->textInput() ?>

    <?= $form->field($model, 'biayaasisten_operator1')->textInput() ?>

    <?= $form->field($model, 'biayaasisten_operator2')->textInput() ?>

    <?= $form->field($model, 'biayaasisten_operator3')->textInput() ?>

    <?= $form->field($model, 'biayainstrumen')->textInput() ?>

    <?= $form->field($model, 'biayadokter_anak')->textInput() ?>

    <?= $form->field($model, 'biayaperawaat_resusitas')->textInput() ?>

    <?= $form->field($model, 'biayadokter_anestesi')->textInput() ?>

    <?= $form->field($model, 'biayaasisten_anestesi')->textInput() ?>

    <?= $form->field($model, 'biayaasisten_anestesi2')->textInput() ?>

    <?= $form->field($model, 'biayabidan')->textInput() ?>

    <?= $form->field($model, 'biayabidan2')->textInput() ?>

    <?= $form->field($model, 'biayabidan3')->textInput() ?>

    <?= $form->field($model, 'biayaperawat_luar')->textInput() ?>

    <?= $form->field($model, 'biayaalat')->textInput() ?>

    <?= $form->field($model, 'biayasewaok')->textInput() ?>

    <?= $form->field($model, 'akomodasi')->textInput() ?>

    <?= $form->field($model, 'bagian_rs')->textInput() ?>

    <?= $form->field($model, 'biaya_omloop')->textInput() ?>

    <?= $form->field($model, 'biaya_omloop2')->textInput() ?>

    <?= $form->field($model, 'biaya_omloop3')->textInput() ?>

    <?= $form->field($model, 'biaya_omloop4')->textInput() ?>

    <?= $form->field($model, 'biaya_omloop5')->textInput() ?>

    <?= $form->field($model, 'biayasarpras')->textInput() ?>

    <?= $form->field($model, 'biaya_dokter_pjanak')->textInput() ?>

    <?= $form->field($model, 'biaya_dokter_umum')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ranap' => 'Ranap', 'Ralan' => 'Ralan', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
