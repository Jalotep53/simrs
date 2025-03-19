<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RvpKlaimBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rvp-klaim-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal_rvp') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'totalpiutang') ?>

    <?= $form->field($model, 'uangmuka') ?>

    <?php // echo $form->field($model, 'sudahdibayar') ?>

    <?php // echo $form->field($model, 'sisapiutang') ?>

    <?php // echo $form->field($model, 'tarifinacbg') ?>

    <?php // echo $form->field($model, 'dibayarbpjs') ?>

    <?php // echo $form->field($model, 'persenbayar') ?>

    <?php // echo $form->field($model, 'rugi') ?>

    <?php // echo $form->field($model, 'lebih') ?>

    <?php // echo $form->field($model, 'materialralan') ?>

    <?php // echo $form->field($model, 'bhpralan') ?>

    <?php // echo $form->field($model, 'tarif_tindakandrralan') ?>

    <?php // echo $form->field($model, 'tarif_tindakanprralan') ?>

    <?php // echo $form->field($model, 'ksoralan') ?>

    <?php // echo $form->field($model, 'menejemenralan') ?>

    <?php // echo $form->field($model, 'biaya_rawatralan') ?>

    <?php // echo $form->field($model, 'materialranap') ?>

    <?php // echo $form->field($model, 'bhpranap') ?>

    <?php // echo $form->field($model, 'tarif_tindakandrranap') ?>

    <?php // echo $form->field($model, 'tarif_tindakanprranap') ?>

    <?php // echo $form->field($model, 'ksoranap') ?>

    <?php // echo $form->field($model, 'menejemenranap') ?>

    <?php // echo $form->field($model, 'biaya_rawatranap') ?>

    <?php // echo $form->field($model, 'bagian_rslabralan') ?>

    <?php // echo $form->field($model, 'bhplabralan') ?>

    <?php // echo $form->field($model, 'tarif_perujuklabralan') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokterlabralan') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_petugaslabralan') ?>

    <?php // echo $form->field($model, 'ksolabralan') ?>

    <?php // echo $form->field($model, 'menejemenlabralan') ?>

    <?php // echo $form->field($model, 'biayalabralan') ?>

    <?php // echo $form->field($model, 'bagian_rslabranap') ?>

    <?php // echo $form->field($model, 'bhplabranap') ?>

    <?php // echo $form->field($model, 'tarif_perujuklabranap') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokterlabranap') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_petugaslabranap') ?>

    <?php // echo $form->field($model, 'ksolabranap') ?>

    <?php // echo $form->field($model, 'menejemenlabranap') ?>

    <?php // echo $form->field($model, 'biayalabranap') ?>

    <?php // echo $form->field($model, 'bagian_rsradiologiralan') ?>

    <?php // echo $form->field($model, 'bhpradiologiralan') ?>

    <?php // echo $form->field($model, 'tarif_perujukradiologiralan') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokterradiologiralan') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_petugasradiologiralan') ?>

    <?php // echo $form->field($model, 'ksoradiologiralan') ?>

    <?php // echo $form->field($model, 'menejemenradiologiralan') ?>

    <?php // echo $form->field($model, 'biayaradiologiralan') ?>

    <?php // echo $form->field($model, 'bagian_rsradiologiranap') ?>

    <?php // echo $form->field($model, 'bhpradiologiranap') ?>

    <?php // echo $form->field($model, 'tarif_perujukradiologiranap') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokterradiologiranap') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_petugasradiologiranap') ?>

    <?php // echo $form->field($model, 'ksoradiologiranap') ?>

    <?php // echo $form->field($model, 'menejemenradiologiranap') ?>

    <?php // echo $form->field($model, 'biayaradiologiranap') ?>

    <?php // echo $form->field($model, 'jmdokteroperasiralan') ?>

    <?php // echo $form->field($model, 'jmparamedisoperasiralan') ?>

    <?php // echo $form->field($model, 'bhpoperasiralan') ?>

    <?php // echo $form->field($model, 'pendapatanoperasiralan') ?>

    <?php // echo $form->field($model, 'jmdokteroperasiranap') ?>

    <?php // echo $form->field($model, 'jmparamedisoperasiranap') ?>

    <?php // echo $form->field($model, 'bhpoperasiranap') ?>

    <?php // echo $form->field($model, 'pendapatanoperasiranap') ?>

    <?php // echo $form->field($model, 'obatlangsung') ?>

    <?php // echo $form->field($model, 'obatralan') ?>

    <?php // echo $form->field($model, 'hppobatralan') ?>

    <?php // echo $form->field($model, 'obatranap') ?>

    <?php // echo $form->field($model, 'hppobatranap') ?>

    <?php // echo $form->field($model, 'returobat') ?>

    <?php // echo $form->field($model, 'tambahanbiaya') ?>

    <?php // echo $form->field($model, 'potonganbiaya') ?>

    <?php // echo $form->field($model, 'kamar') ?>

    <?php // echo $form->field($model, 'reseppulang') ?>

    <?php // echo $form->field($model, 'harianranap') ?>

    <?php // echo $form->field($model, 'registrasi') ?>

    <?php // echo $form->field($model, 'no_sep') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'kd_rek_kontra') ?>

    <?php // echo $form->field($model, 'service') ?>

    <?php // echo $form->field($model, 'ppn_obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
