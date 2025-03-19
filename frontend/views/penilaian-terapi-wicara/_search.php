<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTerapiWicaraSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-terapi-wicara-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'diagnosa_terapi_wicara') ?>

    <?= $form->field($model, 'diagnosa_medis') ?>

    <?= $form->field($model, 'anamnesa') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'perilaku_adaptif_kontak_mata') ?>

    <?php // echo $form->field($model, 'perilaku_adaptif_atensi') ?>

    <?php // echo $form->field($model, 'perilaku_adaptif_perilaku') ?>

    <?php // echo $form->field($model, 'kemampuan_bahasa_bicara_spontan') ?>

    <?php // echo $form->field($model, 'kemampuan_bahasa_pemahaman_bahasa') ?>

    <?php // echo $form->field($model, 'kemampuan_bahasa_pengujaran') ?>

    <?php // echo $form->field($model, 'kemampuan_bahasa_membaca') ?>

    <?php // echo $form->field($model, 'kemampuan_bahasa_penamaan') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_lip') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_tongue') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_hard_palate') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_soft_palate') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_uvula') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_mandibula') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_maxila') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_dental') ?>

    <?php // echo $form->field($model, 'organ_wicara_anatomis_faring') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_lip') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_tongue') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_hard_palate') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_soft_palate') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_uvula') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_mandibula') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_maxilla') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_dental') ?>

    <?php // echo $form->field($model, 'organ_wicara_fisiologis_faring') ?>

    <?php // echo $form->field($model, 'aktifitas_oral_menghisap') ?>

    <?php // echo $form->field($model, 'aktifitas_oral_mengunyah') ?>

    <?php // echo $form->field($model, 'aktifitas_oral_meniup') ?>

    <?php // echo $form->field($model, 'kemampuan_artikulasi_subtitusi') ?>

    <?php // echo $form->field($model, 'kemampuan_artikulasi_omisi') ?>

    <?php // echo $form->field($model, 'kemampuan_artikulasi_distorsi') ?>

    <?php // echo $form->field($model, 'kemampuan_artikulasi_adisi') ?>

    <?php // echo $form->field($model, 'resonasi') ?>

    <?php // echo $form->field($model, 'kemampuan_suara_nada') ?>

    <?php // echo $form->field($model, 'kemampuan_suara_kualitas') ?>

    <?php // echo $form->field($model, 'kemampuan_suara_kenyaringan') ?>

    <?php // echo $form->field($model, 'kemampuan_irama_kelancaran') ?>

    <?php // echo $form->field($model, 'kemampuan_menelan') ?>

    <?php // echo $form->field($model, 'pernafasan') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_dekoding_pendengaran') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_dekoding_penglihatan') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_dekoding_kinesik') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_enkoding_bicara') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_enkoding_tulisan') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_enkoding_mimik') ?>

    <?php // echo $form->field($model, 'tingkat_komunikasi_enkoding_gesture') ?>

    <?php // echo $form->field($model, 'penunjang_medis') ?>

    <?php // echo $form->field($model, 'perencanaan_terapi_tujuan') ?>

    <?php // echo $form->field($model, 'perencanaan_terapi_program') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <?php // echo $form->field($model, 'tindak_lanjut') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
