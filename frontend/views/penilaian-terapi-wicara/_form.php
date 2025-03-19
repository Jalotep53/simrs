<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTerapiWicara $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-terapi-wicara-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'diagnosa_terapi_wicara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perilaku_adaptif_kontak_mata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perilaku_adaptif_atensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perilaku_adaptif_perilaku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_bahasa_bicara_spontan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_bahasa_pemahaman_bahasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_bahasa_pengujaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_bahasa_membaca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_bahasa_penamaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_lip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_tongue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_hard_palate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_soft_palate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_uvula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_mandibula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_maxila')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_dental')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_anatomis_faring')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_lip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_tongue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_hard_palate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_soft_palate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_uvula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_mandibula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_maxilla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_dental')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organ_wicara_fisiologis_faring')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktifitas_oral_menghisap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktifitas_oral_mengunyah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktifitas_oral_meniup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_artikulasi_subtitusi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_artikulasi_omisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_artikulasi_distorsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_artikulasi_adisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resonasi')->dropDownList([ 'Hiponasal' => 'Hiponasal', 'Hipernasal' => 'Hipernasal', 'Normal' => 'Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kemampuan_suara_nada')->dropDownList([ 'Nada' => 'Nada', 'Resonansi' => 'Resonansi', 'Rendah' => 'Rendah', 'Monoton' => 'Monoton', 'Normal' => 'Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kemampuan_suara_kualitas')->dropDownList([ 'Hoarssness' => 'Hoarssness', 'Hassness' => 'Hassness', 'Normal' => 'Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kemampuan_suara_kenyaringan')->dropDownList([ 'Nyaring' => 'Nyaring', 'Tidak Nyaring' => 'Tidak Nyaring', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kemampuan_irama_kelancaran')->dropDownList([ 'Gagap Primer' => 'Gagap Primer', 'Gagap Sekunder' => 'Gagap Sekunder', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kemampuan_menelan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pernafasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_dekoding_pendengaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_dekoding_penglihatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_dekoding_kinesik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_enkoding_bicara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_enkoding_tulisan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_enkoding_mimik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tingkat_komunikasi_enkoding_gesture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penunjang_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perencanaan_terapi_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perencanaan_terapi_program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindak_lanjut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
