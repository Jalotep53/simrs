<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianKorbanKekerasanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-korban-kekerasan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'informasi') ?>

    <?= $form->field($model, 'hubungan_dengan_pasien') ?>

    <?= $form->field($model, 'jumlah_saudara') ?>

    <?php // echo $form->field($model, 'kondisi_keluaga') ?>

    <?php // echo $form->field($model, 'hubungan_orang_terdekat') ?>

    <?php // echo $form->field($model, 'kekerasan_yang_dialami') ?>

    <?php // echo $form->field($model, 'tempat_kejadian') ?>

    <?php // echo $form->field($model, 'lama_kekerasan') ?>

    <?php // echo $form->field($model, 'periode_kekerasan') ?>

    <?php // echo $form->field($model, 'seberapa_sering_mengalami') ?>

    <?php // echo $form->field($model, 'pemicu_kekerasan') ?>

    <?php // echo $form->field($model, 'yang_melakukan_kekerasan') ?>

    <?php // echo $form->field($model, 'dampak_kekerasan') ?>

    <?php // echo $form->field($model, 'tanda_tanda_didapatkan') ?>

    <?php // echo $form->field($model, 'memerlukan_pendampingan') ?>

    <?php // echo $form->field($model, 'riwayat_kelainan') ?>

    <?php // echo $form->field($model, 'pemeriksaan_kepala') ?>

    <?php // echo $form->field($model, 'pemeriksaan_thoraks') ?>

    <?php // echo $form->field($model, 'pemeriksaan_leher') ?>

    <?php // echo $form->field($model, 'pemeriksaan_abdomen') ?>

    <?php // echo $form->field($model, 'pemeriksaan_genitalia') ?>

    <?php // echo $form->field($model, 'pemeriksaan_ekstrimitas_atas') ?>

    <?php // echo $form->field($model, 'pemeriksaan_ekstrimitas_bawah') ?>

    <?php // echo $form->field($model, 'pemeriksaan_anus') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
