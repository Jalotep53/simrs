<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKewaspadaanKesehatanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-kewaspadaan-kesehatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggalperiksa') ?>

    <?= $form->field($model, 'keluhan_saat_ini') ?>

    <?= $form->field($model, 'keperluan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
