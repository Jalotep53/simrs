<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthJenpelRuangRawatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inhealth-jenpel-ruang-rawat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_kamar') ?>

    <?= $form->field($model, 'kode_jenpel_ruang_rawat') ?>

    <?= $form->field($model, 'nama_jenpel_ruang_rawat') ?>

    <?= $form->field($model, 'tarif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
