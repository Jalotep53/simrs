<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilTindakanEswlSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-tindakan-eswl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'mulai') ?>

    <?= $form->field($model, 'selesai') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'obat_analgesik') ?>

    <?php // echo $form->field($model, 'obat_lain') ?>

    <?php // echo $form->field($model, 'uraian_tindakan') ?>

    <?php // echo $form->field($model, 'uraian_tindakan_focus') ?>

    <?php // echo $form->field($model, 'uraian_tindakan_rate') ?>

    <?php // echo $form->field($model, 'uraian_tindakan_power') ?>

    <?php // echo $form->field($model, 'uraian_tindakan_shock') ?>

    <?php // echo $form->field($model, 'diintegrasi') ?>

    <?php // echo $form->field($model, 'kekurangan') ?>

    <?php // echo $form->field($model, 'anjungan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
