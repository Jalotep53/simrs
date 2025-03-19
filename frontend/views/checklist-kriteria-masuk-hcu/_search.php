<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukHcuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="checklist-kriteria-masuk-hcu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kardiologi1') ?>

    <?= $form->field($model, 'kardiologi2') ?>

    <?= $form->field($model, 'kardiologi3') ?>

    <?php // echo $form->field($model, 'kardiologi4') ?>

    <?php // echo $form->field($model, 'kardiologi5') ?>

    <?php // echo $form->field($model, 'kardiologi6') ?>

    <?php // echo $form->field($model, 'pernapasan1') ?>

    <?php // echo $form->field($model, 'pernapasan2') ?>

    <?php // echo $form->field($model, 'pernapasan3') ?>

    <?php // echo $form->field($model, 'syaraf1') ?>

    <?php // echo $form->field($model, 'syaraf2') ?>

    <?php // echo $form->field($model, 'syaraf3') ?>

    <?php // echo $form->field($model, 'syaraf4') ?>

    <?php // echo $form->field($model, 'pencernaan1') ?>

    <?php // echo $form->field($model, 'pencernaan2') ?>

    <?php // echo $form->field($model, 'pencernaan3') ?>

    <?php // echo $form->field($model, 'pencernaan4') ?>

    <?php // echo $form->field($model, 'pembedahan1') ?>

    <?php // echo $form->field($model, 'pembedahan2') ?>

    <?php // echo $form->field($model, 'hematologi1') ?>

    <?php // echo $form->field($model, 'hematologi2') ?>

    <?php // echo $form->field($model, 'infeksi') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
