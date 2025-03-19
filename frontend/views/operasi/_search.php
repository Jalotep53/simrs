<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\OperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="operasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_operasi') ?>

    <?= $form->field($model, 'jenis_anasthesi') ?>

    <?= $form->field($model, 'kategori') ?>

    <?= $form->field($model, 'operator1') ?>

    <?php // echo $form->field($model, 'operator2') ?>

    <?php // echo $form->field($model, 'operator3') ?>

    <?php // echo $form->field($model, 'asisten_operator1') ?>

    <?php // echo $form->field($model, 'asisten_operator2') ?>

    <?php // echo $form->field($model, 'asisten_operator3') ?>

    <?php // echo $form->field($model, 'instrumen') ?>

    <?php // echo $form->field($model, 'dokter_anak') ?>

    <?php // echo $form->field($model, 'perawaat_resusitas') ?>

    <?php // echo $form->field($model, 'dokter_anestesi') ?>

    <?php // echo $form->field($model, 'asisten_anestesi') ?>

    <?php // echo $form->field($model, 'asisten_anestesi2') ?>

    <?php // echo $form->field($model, 'bidan') ?>

    <?php // echo $form->field($model, 'bidan2') ?>

    <?php // echo $form->field($model, 'bidan3') ?>

    <?php // echo $form->field($model, 'perawat_luar') ?>

    <?php // echo $form->field($model, 'omloop') ?>

    <?php // echo $form->field($model, 'omloop2') ?>

    <?php // echo $form->field($model, 'omloop3') ?>

    <?php // echo $form->field($model, 'omloop4') ?>

    <?php // echo $form->field($model, 'omloop5') ?>

    <?php // echo $form->field($model, 'dokter_pjanak') ?>

    <?php // echo $form->field($model, 'dokter_umum') ?>

    <?php // echo $form->field($model, 'kode_paket') ?>

    <?php // echo $form->field($model, 'biayaoperator1') ?>

    <?php // echo $form->field($model, 'biayaoperator2') ?>

    <?php // echo $form->field($model, 'biayaoperator3') ?>

    <?php // echo $form->field($model, 'biayaasisten_operator1') ?>

    <?php // echo $form->field($model, 'biayaasisten_operator2') ?>

    <?php // echo $form->field($model, 'biayaasisten_operator3') ?>

    <?php // echo $form->field($model, 'biayainstrumen') ?>

    <?php // echo $form->field($model, 'biayadokter_anak') ?>

    <?php // echo $form->field($model, 'biayaperawaat_resusitas') ?>

    <?php // echo $form->field($model, 'biayadokter_anestesi') ?>

    <?php // echo $form->field($model, 'biayaasisten_anestesi') ?>

    <?php // echo $form->field($model, 'biayaasisten_anestesi2') ?>

    <?php // echo $form->field($model, 'biayabidan') ?>

    <?php // echo $form->field($model, 'biayabidan2') ?>

    <?php // echo $form->field($model, 'biayabidan3') ?>

    <?php // echo $form->field($model, 'biayaperawat_luar') ?>

    <?php // echo $form->field($model, 'biayaalat') ?>

    <?php // echo $form->field($model, 'biayasewaok') ?>

    <?php // echo $form->field($model, 'akomodasi') ?>

    <?php // echo $form->field($model, 'bagian_rs') ?>

    <?php // echo $form->field($model, 'biaya_omloop') ?>

    <?php // echo $form->field($model, 'biaya_omloop2') ?>

    <?php // echo $form->field($model, 'biaya_omloop3') ?>

    <?php // echo $form->field($model, 'biaya_omloop4') ?>

    <?php // echo $form->field($model, 'biaya_omloop5') ?>

    <?php // echo $form->field($model, 'biayasarpras') ?>

    <?php // echo $form->field($model, 'biaya_dokter_pjanak') ?>

    <?php // echo $form->field($model, 'biaya_dokter_umum') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
