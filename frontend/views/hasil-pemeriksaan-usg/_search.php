<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-pemeriksaan-usg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'diagnosa_klinis') ?>

    <?= $form->field($model, 'kiriman_dari') ?>

    <?php // echo $form->field($model, 'hta') ?>

    <?php // echo $form->field($model, 'kantong_gestasi') ?>

    <?php // echo $form->field($model, 'ukuran_bokongkepala') ?>

    <?php // echo $form->field($model, 'jenis_prestasi') ?>

    <?php // echo $form->field($model, 'diameter_biparietal') ?>

    <?php // echo $form->field($model, 'panjang_femur') ?>

    <?php // echo $form->field($model, 'lingkar_abdomen') ?>

    <?php // echo $form->field($model, 'tafsiran_berat_janin') ?>

    <?php // echo $form->field($model, 'usia_kehamilan') ?>

    <?php // echo $form->field($model, 'plasenta_berimplatansi') ?>

    <?php // echo $form->field($model, 'derajat_maturitas') ?>

    <?php // echo $form->field($model, 'jumlah_air_ketuban') ?>

    <?php // echo $form->field($model, 'indek_cairan_ketuban') ?>

    <?php // echo $form->field($model, 'kelainan_kongenital') ?>

    <?php // echo $form->field($model, 'peluang_sex') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
