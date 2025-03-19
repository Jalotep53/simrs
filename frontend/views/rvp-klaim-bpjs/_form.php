<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RvpKlaimBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rvp-klaim-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_rvp')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalpiutang')->textInput() ?>

    <?= $form->field($model, 'uangmuka')->textInput() ?>

    <?= $form->field($model, 'sudahdibayar')->textInput() ?>

    <?= $form->field($model, 'sisapiutang')->textInput() ?>

    <?= $form->field($model, 'tarifinacbg')->textInput() ?>

    <?= $form->field($model, 'dibayarbpjs')->textInput() ?>

    <?= $form->field($model, 'persenbayar')->textInput() ?>

    <?= $form->field($model, 'rugi')->textInput() ?>

    <?= $form->field($model, 'lebih')->textInput() ?>

    <?= $form->field($model, 'materialralan')->textInput() ?>

    <?= $form->field($model, 'bhpralan')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakandrralan')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakanprralan')->textInput() ?>

    <?= $form->field($model, 'ksoralan')->textInput() ?>

    <?= $form->field($model, 'menejemenralan')->textInput() ?>

    <?= $form->field($model, 'biaya_rawatralan')->textInput() ?>

    <?= $form->field($model, 'materialranap')->textInput() ?>

    <?= $form->field($model, 'bhpranap')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakandrranap')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakanprranap')->textInput() ?>

    <?= $form->field($model, 'ksoranap')->textInput() ?>

    <?= $form->field($model, 'menejemenranap')->textInput() ?>

    <?= $form->field($model, 'biaya_rawatranap')->textInput() ?>

    <?= $form->field($model, 'bagian_rslabralan')->textInput() ?>

    <?= $form->field($model, 'bhplabralan')->textInput() ?>

    <?= $form->field($model, 'tarif_perujuklabralan')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_dokterlabralan')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_petugaslabralan')->textInput() ?>

    <?= $form->field($model, 'ksolabralan')->textInput() ?>

    <?= $form->field($model, 'menejemenlabralan')->textInput() ?>

    <?= $form->field($model, 'biayalabralan')->textInput() ?>

    <?= $form->field($model, 'bagian_rslabranap')->textInput() ?>

    <?= $form->field($model, 'bhplabranap')->textInput() ?>

    <?= $form->field($model, 'tarif_perujuklabranap')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_dokterlabranap')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_petugaslabranap')->textInput() ?>

    <?= $form->field($model, 'ksolabranap')->textInput() ?>

    <?= $form->field($model, 'menejemenlabranap')->textInput() ?>

    <?= $form->field($model, 'biayalabranap')->textInput() ?>

    <?= $form->field($model, 'bagian_rsradiologiralan')->textInput() ?>

    <?= $form->field($model, 'bhpradiologiralan')->textInput() ?>

    <?= $form->field($model, 'tarif_perujukradiologiralan')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_dokterradiologiralan')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_petugasradiologiralan')->textInput() ?>

    <?= $form->field($model, 'ksoradiologiralan')->textInput() ?>

    <?= $form->field($model, 'menejemenradiologiralan')->textInput() ?>

    <?= $form->field($model, 'biayaradiologiralan')->textInput() ?>

    <?= $form->field($model, 'bagian_rsradiologiranap')->textInput() ?>

    <?= $form->field($model, 'bhpradiologiranap')->textInput() ?>

    <?= $form->field($model, 'tarif_perujukradiologiranap')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_dokterradiologiranap')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_petugasradiologiranap')->textInput() ?>

    <?= $form->field($model, 'ksoradiologiranap')->textInput() ?>

    <?= $form->field($model, 'menejemenradiologiranap')->textInput() ?>

    <?= $form->field($model, 'biayaradiologiranap')->textInput() ?>

    <?= $form->field($model, 'jmdokteroperasiralan')->textInput() ?>

    <?= $form->field($model, 'jmparamedisoperasiralan')->textInput() ?>

    <?= $form->field($model, 'bhpoperasiralan')->textInput() ?>

    <?= $form->field($model, 'pendapatanoperasiralan')->textInput() ?>

    <?= $form->field($model, 'jmdokteroperasiranap')->textInput() ?>

    <?= $form->field($model, 'jmparamedisoperasiranap')->textInput() ?>

    <?= $form->field($model, 'bhpoperasiranap')->textInput() ?>

    <?= $form->field($model, 'pendapatanoperasiranap')->textInput() ?>

    <?= $form->field($model, 'obatlangsung')->textInput() ?>

    <?= $form->field($model, 'obatralan')->textInput() ?>

    <?= $form->field($model, 'hppobatralan')->textInput() ?>

    <?= $form->field($model, 'obatranap')->textInput() ?>

    <?= $form->field($model, 'hppobatranap')->textInput() ?>

    <?= $form->field($model, 'returobat')->textInput() ?>

    <?= $form->field($model, 'tambahanbiaya')->textInput() ?>

    <?= $form->field($model, 'potonganbiaya')->textInput() ?>

    <?= $form->field($model, 'kamar')->textInput() ?>

    <?= $form->field($model, 'reseppulang')->textInput() ?>

    <?= $form->field($model, 'harianranap')->textInput() ?>

    <?= $form->field($model, 'registrasi')->textInput() ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek_kontra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service')->textInput() ?>

    <?= $form->field($model, 'ppn_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
