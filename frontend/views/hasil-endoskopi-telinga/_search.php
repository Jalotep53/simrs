<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelingaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-endoskopi-telinga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'diagnosa_klinis') ?>

    <?= $form->field($model, 'kiriman_dari') ?>

    <?php // echo $form->field($model, 'bentuk_liang_telinga_kanan') ?>

    <?php // echo $form->field($model, 'bentuk_liang_telinga_kiri') ?>

    <?php // echo $form->field($model, 'kondisi_liang_telinga_kanan') ?>

    <?php // echo $form->field($model, 'keterangan_kondisi_liang_telinga_kanan') ?>

    <?php // echo $form->field($model, 'kondisi_liang_telinga_kiri') ?>

    <?php // echo $form->field($model, 'keterangan_kondisi_liang_telinga_kiri') ?>

    <?php // echo $form->field($model, 'membran_timpani_intak_kanan') ?>

    <?php // echo $form->field($model, 'membran_timpani_intak_kiri') ?>

    <?php // echo $form->field($model, 'membran_timpani_perforasi_kanan') ?>

    <?php // echo $form->field($model, 'keterangan_membran_timpani_perforasi_kanan') ?>

    <?php // echo $form->field($model, 'membran_timpani_perforasi_kiri') ?>

    <?php // echo $form->field($model, 'keterangan_membran_timpani_perforasi_kiri') ?>

    <?php // echo $form->field($model, 'kavum_timpani_mukosa_kanan') ?>

    <?php // echo $form->field($model, 'kavum_timpani_mukosa_kiri') ?>

    <?php // echo $form->field($model, 'kavum_timpani_osikel_kanan') ?>

    <?php // echo $form->field($model, 'kavum_timpani_osikel_kiri') ?>

    <?php // echo $form->field($model, 'kavum_timpani_isthmus_kanan') ?>

    <?php // echo $form->field($model, 'kavum_timpani_isthmus_kiri') ?>

    <?php // echo $form->field($model, 'kavum_timpani_anterior_kanan') ?>

    <?php // echo $form->field($model, 'kavum_timpani_anterior_kiri') ?>

    <?php // echo $form->field($model, 'kavum_timpani_posterior_kanan') ?>

    <?php // echo $form->field($model, 'kavum_timpani_posterior_kiri') ?>

    <?php // echo $form->field($model, 'lainlain_kanan') ?>

    <?php // echo $form->field($model, 'lainlain_kiri') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <?php // echo $form->field($model, 'anjuran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
