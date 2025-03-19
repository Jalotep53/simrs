<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateLaporanOperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-laporan-operasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_template') ?>

    <?= $form->field($model, 'nama_operasi') ?>

    <?= $form->field($model, 'diagnosa_preop') ?>

    <?= $form->field($model, 'diagnosa_postop') ?>

    <?= $form->field($model, 'jaringan_dieksisi') ?>

    <?php // echo $form->field($model, 'permintaan_pa') ?>

    <?php // echo $form->field($model, 'laporan_operasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
