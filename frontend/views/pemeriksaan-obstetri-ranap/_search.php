<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanObstetriRanapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemeriksaan-obstetri-ranap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'tinggi_uteri') ?>

    <?= $form->field($model, 'janin') ?>

    <?php // echo $form->field($model, 'letak') ?>

    <?php // echo $form->field($model, 'panggul') ?>

    <?php // echo $form->field($model, 'denyut') ?>

    <?php // echo $form->field($model, 'kontraksi') ?>

    <?php // echo $form->field($model, 'kualitas_mnt') ?>

    <?php // echo $form->field($model, 'kualitas_dtk') ?>

    <?php // echo $form->field($model, 'fluksus') ?>

    <?php // echo $form->field($model, 'albus') ?>

    <?php // echo $form->field($model, 'vulva') ?>

    <?php // echo $form->field($model, 'portio') ?>

    <?php // echo $form->field($model, 'dalam') ?>

    <?php // echo $form->field($model, 'tebal') ?>

    <?php // echo $form->field($model, 'arah') ?>

    <?php // echo $form->field($model, 'pembukaan') ?>

    <?php // echo $form->field($model, 'penurunan') ?>

    <?php // echo $form->field($model, 'denominator') ?>

    <?php // echo $form->field($model, 'ketuban') ?>

    <?php // echo $form->field($model, 'feto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
