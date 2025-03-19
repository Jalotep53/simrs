<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenolakanTindakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="persetujuan-penolakan-tindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pernyataan') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'diagnosa_konfirmasi') ?>

    <?php // echo $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'tindakan_konfirmasi') ?>

    <?php // echo $form->field($model, 'indikasi_tindakan') ?>

    <?php // echo $form->field($model, 'indikasi_tindakan_konfirmasi') ?>

    <?php // echo $form->field($model, 'tata_cara') ?>

    <?php // echo $form->field($model, 'tata_cara_konfirmasi') ?>

    <?php // echo $form->field($model, 'tujuan') ?>

    <?php // echo $form->field($model, 'tujuan_konfirmasi') ?>

    <?php // echo $form->field($model, 'risiko') ?>

    <?php // echo $form->field($model, 'risiko_konfirmasi') ?>

    <?php // echo $form->field($model, 'komplikasi') ?>

    <?php // echo $form->field($model, 'komplikasi_konfirmasi') ?>

    <?php // echo $form->field($model, 'prognosis') ?>

    <?php // echo $form->field($model, 'prognosis_konfirmasi') ?>

    <?php // echo $form->field($model, 'alternatif_dan_risikonya') ?>

    <?php // echo $form->field($model, 'alternatif_konfirmasi') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <?php // echo $form->field($model, 'biaya_konfirmasi') ?>

    <?php // echo $form->field($model, 'lain_lain') ?>

    <?php // echo $form->field($model, 'lain_lain_konfirmasi') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'penerima_informasi') ?>

    <?php // echo $form->field($model, 'alasan_diwakilkan_penerima_informasi') ?>

    <?php // echo $form->field($model, 'jk_penerima_informasi') ?>

    <?php // echo $form->field($model, 'tanggal_lahir_penerima_informasi') ?>

    <?php // echo $form->field($model, 'umur_penerima_informasi') ?>

    <?php // echo $form->field($model, 'alamat_penerima_informasi') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'hubungan_penerima_informasi') ?>

    <?php // echo $form->field($model, 'pernyataan') ?>

    <?php // echo $form->field($model, 'saksi_keluarga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
