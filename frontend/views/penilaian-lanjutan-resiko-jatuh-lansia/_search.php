<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhLansiaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-lanjutan-resiko-jatuh-lansia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala1') ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_nilai1') ?>

    <?= $form->field($model, 'penilaian_jatuhmorse_skala2') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_nilai2') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_skala3') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_nilai3') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_skala4') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_nilai4') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_skala5') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_nilai5') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_skala6') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_nilai6') ?>

    <?php // echo $form->field($model, 'penilaian_jatuhmorse_totalnilai') ?>

    <?php // echo $form->field($model, 'hasil_skrining') ?>

    <?php // echo $form->field($model, 'saran') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
