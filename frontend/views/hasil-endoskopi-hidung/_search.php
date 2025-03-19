<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiHidungSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-endoskopi-hidung-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'diagnosa_klinis') ?>

    <?= $form->field($model, 'kiriman_dari') ?>

    <?php // echo $form->field($model, 'kondisi_hidung_kanan') ?>

    <?php // echo $form->field($model, 'kondisi_hidung_kiri') ?>

    <?php // echo $form->field($model, 'kavum_nasi_kanan') ?>

    <?php // echo $form->field($model, 'kavum_nasi_kiri') ?>

    <?php // echo $form->field($model, 'konka_inferior_kanan') ?>

    <?php // echo $form->field($model, 'konka_inferior_kiri') ?>

    <?php // echo $form->field($model, 'meatus_medius_kanan') ?>

    <?php // echo $form->field($model, 'meatus_medius_kiri') ?>

    <?php // echo $form->field($model, 'septum_kanan') ?>

    <?php // echo $form->field($model, 'septum_kiri') ?>

    <?php // echo $form->field($model, 'nasofaring_kanan') ?>

    <?php // echo $form->field($model, 'nasofaring_kiri') ?>

    <?php // echo $form->field($model, 'lainlain_kanan') ?>

    <?php // echo $form->field($model, 'lainlain_kiri') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
