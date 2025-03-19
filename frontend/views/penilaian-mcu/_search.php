<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMcuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-mcu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'informasi') ?>

    <?= $form->field($model, 'rps') ?>

    <?php // echo $form->field($model, 'rpk') ?>

    <?php // echo $form->field($model, 'rpd') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'keadaan') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'tb') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'submandibula') ?>

    <?php // echo $form->field($model, 'axilla') ?>

    <?php // echo $form->field($model, 'supraklavikula') ?>

    <?php // echo $form->field($model, 'leher') ?>

    <?php // echo $form->field($model, 'inguinal') ?>

    <?php // echo $form->field($model, 'oedema') ?>

    <?php // echo $form->field($model, 'sinus_frontalis') ?>

    <?php // echo $form->field($model, 'sinus_maxilaris') ?>

    <?php // echo $form->field($model, 'palpebra') ?>

    <?php // echo $form->field($model, 'sklera') ?>

    <?php // echo $form->field($model, 'cornea') ?>

    <?php // echo $form->field($model, 'buta_warna') ?>

    <?php // echo $form->field($model, 'konjungtiva') ?>

    <?php // echo $form->field($model, 'lensa') ?>

    <?php // echo $form->field($model, 'pupil') ?>

    <?php // echo $form->field($model, 'lubang_telinga') ?>

    <?php // echo $form->field($model, 'daun_telinga') ?>

    <?php // echo $form->field($model, 'selaput_pendengaran') ?>

    <?php // echo $form->field($model, 'proc_mastoideus') ?>

    <?php // echo $form->field($model, 'septum_nasi') ?>

    <?php // echo $form->field($model, 'lubang_hidung') ?>

    <?php // echo $form->field($model, 'bibir') ?>

    <?php // echo $form->field($model, 'caries') ?>

    <?php // echo $form->field($model, 'lidah') ?>

    <?php // echo $form->field($model, 'faring') ?>

    <?php // echo $form->field($model, 'tonsil') ?>

    <?php // echo $form->field($model, 'kelenjar_limfe') ?>

    <?php // echo $form->field($model, 'kelenjar_gondok') ?>

    <?php // echo $form->field($model, 'gerakan_dada') ?>

    <?php // echo $form->field($model, 'vocal_femitus') ?>

    <?php // echo $form->field($model, 'perkusi_dada') ?>

    <?php // echo $form->field($model, 'bunyi_napas') ?>

    <?php // echo $form->field($model, 'bunyi_tambahan') ?>

    <?php // echo $form->field($model, 'ictus_cordis') ?>

    <?php // echo $form->field($model, 'bunyi_jantung') ?>

    <?php // echo $form->field($model, 'batas') ?>

    <?php // echo $form->field($model, 'inspeksi') ?>

    <?php // echo $form->field($model, 'palpasi') ?>

    <?php // echo $form->field($model, 'hepar') ?>

    <?php // echo $form->field($model, 'perkusi_abdomen') ?>

    <?php // echo $form->field($model, 'auskultasi') ?>

    <?php // echo $form->field($model, 'limpa') ?>

    <?php // echo $form->field($model, 'costovertebral') ?>

    <?php // echo $form->field($model, 'kondisi_kulit') ?>

    <?php // echo $form->field($model, 'ekstrimitas_atas') ?>

    <?php // echo $form->field($model, 'ekstrimitas_atas_ket') ?>

    <?php // echo $form->field($model, 'ekstrimitas_bawah') ?>

    <?php // echo $form->field($model, 'ekstrimitas_bawah_ket') ?>

    <?php // echo $form->field($model, 'laborat') ?>

    <?php // echo $form->field($model, 'radiologi') ?>

    <?php // echo $form->field($model, 'ekg') ?>

    <?php // echo $form->field($model, 'spirometri') ?>

    <?php // echo $form->field($model, 'audiometri') ?>

    <?php // echo $form->field($model, 'treadmill') ?>

    <?php // echo $form->field($model, 'lainlain') ?>

    <?php // echo $form->field($model, 'merokok') ?>

    <?php // echo $form->field($model, 'alkohol') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <?php // echo $form->field($model, 'anjuran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
