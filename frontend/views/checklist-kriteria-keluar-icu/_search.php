<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaKeluarIcuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="checklist-kriteria-keluar-icu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kriteria1') ?>

    <?= $form->field($model, 'kriteria2') ?>

    <?= $form->field($model, 'kriteria3') ?>

    <?php // echo $form->field($model, 'kriteria4') ?>

    <?php // echo $form->field($model, 'kriteria5') ?>

    <?php // echo $form->field($model, 'kriteria6') ?>

    <?php // echo $form->field($model, 'kriteria7') ?>

    <?php // echo $form->field($model, 'kriteria8') ?>

    <?php // echo $form->field($model, 'kriteria9') ?>

    <?php // echo $form->field($model, 'kriteria10') ?>

    <?php // echo $form->field($model, 'kriteria11') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
