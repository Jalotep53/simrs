<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPsikologiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-psikologi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'dikirim_dari') ?>

    <?php // echo $form->field($model, 'tujuan_pemeriksaan') ?>

    <?php // echo $form->field($model, 'ket_anamnesis') ?>

    <?php // echo $form->field($model, 'rupa') ?>

    <?php // echo $form->field($model, 'bentuk_tubuh') ?>

    <?php // echo $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'pakaian') ?>

    <?php // echo $form->field($model, 'ekspresi') ?>

    <?php // echo $form->field($model, 'berbicara') ?>

    <?php // echo $form->field($model, 'penggunaan_kata') ?>

    <?php // echo $form->field($model, 'ciri_menyolok') ?>

    <?php // echo $form->field($model, 'hasil_psikotes') ?>

    <?php // echo $form->field($model, 'kepribadian') ?>

    <?php // echo $form->field($model, 'psikodinamika') ?>

    <?php // echo $form->field($model, 'kesimpulan_psikolog') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
