<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoJatuhNeonatusSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-risiko-jatuh-neonatus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'intervensi1') ?>

    <?= $form->field($model, 'intervensi2') ?>

    <?= $form->field($model, 'intervensi3') ?>

    <?php // echo $form->field($model, 'intervensi4') ?>

    <?php // echo $form->field($model, 'intervensi5') ?>

    <?php // echo $form->field($model, 'intervensi6') ?>

    <?php // echo $form->field($model, 'intervensi7') ?>

    <?php // echo $form->field($model, 'intervensi8') ?>

    <?php // echo $form->field($model, 'intervensi9') ?>

    <?php // echo $form->field($model, 'edukasi1') ?>

    <?php // echo $form->field($model, 'edukasi2') ?>

    <?php // echo $form->field($model, 'edukasi3') ?>

    <?php // echo $form->field($model, 'edukasi4') ?>

    <?php // echo $form->field($model, 'edukasi5') ?>

    <?php // echo $form->field($model, 'sasaran1') ?>

    <?php // echo $form->field($model, 'sasaran2') ?>

    <?php // echo $form->field($model, 'sasaran3') ?>

    <?php // echo $form->field($model, 'sasaran4') ?>

    <?php // echo $form->field($model, 'evaluasi1') ?>

    <?php // echo $form->field($model, 'evaluasi2') ?>

    <?php // echo $form->field($model, 'evaluasi3') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
