<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrainSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengkajian-restrain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'gcs') ?>

    <?= $form->field($model, 'refleka_cahaya_ka') ?>

    <?php // echo $form->field($model, 'refleka_cahaya_ki') ?>

    <?php // echo $form->field($model, 'ukuran_pupil_ka') ?>

    <?php // echo $form->field($model, 'ukuran_pupil_ki') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'hasil_observasi') ?>

    <?php // echo $form->field($model, 'pertimbangan_klinis') ?>

    <?php // echo $form->field($model, 'restrain_non_farmakologi') ?>

    <?php // echo $form->field($model, 'restrain_non_farmakologi_keterangan') ?>

    <?php // echo $form->field($model, 'restrain_farmakologi') ?>

    <?php // echo $form->field($model, 'sudah_dijelaskan_keluarga') ?>

    <?php // echo $form->field($model, 'keluarga_yang_menyetujui') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
