<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRalanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-lokasi-ralan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_poli') ?>

    <?= $form->field($model, 'id_organisasi_satusehat') ?>

    <?= $form->field($model, 'id_lokasi_satusehat') ?>

    <?= $form->field($model, 'longitude') ?>

    <?= $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'altittude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
