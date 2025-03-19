<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhGeriatriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-lanjutan-resiko-jatuh-geriatri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'penilaian_jatuh_skala1') ?>

    <?= $form->field($model, 'penilaian_jatuh_nilai1') ?>

    <?= $form->field($model, 'penilaian_jatuh_skala2') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai2') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala3') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai3') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala4') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai4') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala5') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai5') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala6') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai6') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala7') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai7') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala8') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai8') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala9') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai9') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala10') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai10') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_skala11') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_nilai11') ?>

    <?php // echo $form->field($model, 'penilaian_jatuh_totalnilai') ?>

    <?php // echo $form->field($model, 'hasil_skrining') ?>

    <?php // echo $form->field($model, 'saran') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
