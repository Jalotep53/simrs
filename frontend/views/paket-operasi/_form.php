<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PaketOperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="paket-operasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_perawatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori')->dropDownList([ 'Kebidanan' => 'Kebidanan', 'Operasi' => 'Operasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'operator1')->textInput() ?>

    <?= $form->field($model, 'operator2')->textInput() ?>

    <?= $form->field($model, 'operator3')->textInput() ?>

    <?= $form->field($model, 'asisten_operator1')->textInput() ?>

    <?= $form->field($model, 'asisten_operator2')->textInput() ?>

    <?= $form->field($model, 'asisten_operator3')->textInput() ?>

    <?= $form->field($model, 'instrumen')->textInput() ?>

    <?= $form->field($model, 'dokter_anak')->textInput() ?>

    <?= $form->field($model, 'perawaat_resusitas')->textInput() ?>

    <?= $form->field($model, 'dokter_anestesi')->textInput() ?>

    <?= $form->field($model, 'asisten_anestesi')->textInput() ?>

    <?= $form->field($model, 'asisten_anestesi2')->textInput() ?>

    <?= $form->field($model, 'bidan')->textInput() ?>

    <?= $form->field($model, 'bidan2')->textInput() ?>

    <?= $form->field($model, 'bidan3')->textInput() ?>

    <?= $form->field($model, 'perawat_luar')->textInput() ?>

    <?= $form->field($model, 'sewa_ok')->textInput() ?>

    <?= $form->field($model, 'alat')->textInput() ?>

    <?= $form->field($model, 'akomodasi')->textInput() ?>

    <?= $form->field($model, 'bagian_rs')->textInput() ?>

    <?= $form->field($model, 'omloop')->textInput() ?>

    <?= $form->field($model, 'omloop2')->textInput() ?>

    <?= $form->field($model, 'omloop3')->textInput() ?>

    <?= $form->field($model, 'omloop4')->textInput() ?>

    <?= $form->field($model, 'omloop5')->textInput() ?>

    <?= $form->field($model, 'sarpras')->textInput() ?>

    <?= $form->field($model, 'dokter_pjanak')->textInput() ?>

    <?= $form->field($model, 'dokter_umum')->textInput() ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelas')->dropDownList([ '-' => '-', 'Rawat Jalan' => 'Rawat Jalan', 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
