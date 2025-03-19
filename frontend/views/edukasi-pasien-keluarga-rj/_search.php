<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\EdukasiPasienKeluargaRjSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="edukasi-pasien-keluarga-rj-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'bicara') ?>

    <?= $form->field($model, 'keterangan_bicara') ?>

    <?php // echo $form->field($model, 'bahasa_sehari') ?>

    <?php // echo $form->field($model, 'perlu_penerjemah') ?>

    <?php // echo $form->field($model, 'keterangan_penerjemah') ?>

    <?php // echo $form->field($model, 'bahasa_isyarat') ?>

    <?php // echo $form->field($model, 'cara_belajar') ?>

    <?php // echo $form->field($model, 'hambatan_belajar') ?>

    <?php // echo $form->field($model, 'keterangan_hambatan_belajar') ?>

    <?php // echo $form->field($model, 'kemampuan_belajar') ?>

    <?php // echo $form->field($model, 'keterangan_kemampuan_belajar') ?>

    <?php // echo $form->field($model, 'penyakitnya_merupakan') ?>

    <?php // echo $form->field($model, 'keterangan_penyakitnya_merupakan') ?>

    <?php // echo $form->field($model, 'keputusan_memilih_layanan') ?>

    <?php // echo $form->field($model, 'keterangan_keputusan_memilih_layanan') ?>

    <?php // echo $form->field($model, 'keyakinan_terhadap_terapi') ?>

    <?php // echo $form->field($model, 'keterangan_keyakinan_terhadap_terapi') ?>

    <?php // echo $form->field($model, 'aspek_keyakinan_dipertimbangkan') ?>

    <?php // echo $form->field($model, 'keterangan_aspek_keyakinan_dipertimbangkan') ?>

    <?php // echo $form->field($model, 'kesediaan_menerima_informasi') ?>

    <?php // echo $form->field($model, 'topik_edukasi_penyakit') ?>

    <?php // echo $form->field($model, 'topik_edukasi_rencana_tindakan') ?>

    <?php // echo $form->field($model, 'topik_edukasi_pengobatan') ?>

    <?php // echo $form->field($model, 'topik_edukasi_hasil_layanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
