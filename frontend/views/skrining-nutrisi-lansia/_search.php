<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiLansiaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-nutrisi-lansia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'td') ?>

    <?= $form->field($model, 'hr') ?>

    <?= $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'tbpb') ?>

    <?php // echo $form->field($model, 'spo2') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'sg1') ?>

    <?php // echo $form->field($model, 'nilai1') ?>

    <?php // echo $form->field($model, 'sg2') ?>

    <?php // echo $form->field($model, 'nilai2') ?>

    <?php // echo $form->field($model, 'sg3') ?>

    <?php // echo $form->field($model, 'nilai3') ?>

    <?php // echo $form->field($model, 'sg4') ?>

    <?php // echo $form->field($model, 'nilai4') ?>

    <?php // echo $form->field($model, 'sg5') ?>

    <?php // echo $form->field($model, 'nilai5') ?>

    <?php // echo $form->field($model, 'sg6') ?>

    <?php // echo $form->field($model, 'nilai6') ?>

    <?php // echo $form->field($model, 'total_hasil') ?>

    <?php // echo $form->field($model, 'skor_nutrisi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
