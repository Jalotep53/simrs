<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoDekubitusSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-risiko-dekubitus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kondisi_fisik') ?>

    <?= $form->field($model, 'kondisi_fisik_nilai') ?>

    <?= $form->field($model, 'status_mental') ?>

    <?php // echo $form->field($model, 'status_mental_nilai') ?>

    <?php // echo $form->field($model, 'aktifitas') ?>

    <?php // echo $form->field($model, 'aktifitas_nilai') ?>

    <?php // echo $form->field($model, 'mobilitas') ?>

    <?php // echo $form->field($model, 'mobilitas_nilai') ?>

    <?php // echo $form->field($model, 'inkontinensia') ?>

    <?php // echo $form->field($model, 'inkontinensia_nilai') ?>

    <?php // echo $form->field($model, 'totalnilai') ?>

    <?php // echo $form->field($model, 'kategorinilai') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
