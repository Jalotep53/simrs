<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerawatanCoronaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perawatan-corona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'pemulasaraan_jenazah') ?>

    <?= $form->field($model, 'kantong_jenazah') ?>

    <?= $form->field($model, 'peti_jenazah') ?>

    <?= $form->field($model, 'plastik_erat') ?>

    <?php // echo $form->field($model, 'desinfektan_jenazah') ?>

    <?php // echo $form->field($model, 'mobil_jenazah') ?>

    <?php // echo $form->field($model, 'desinfektan_mobil_jenazah') ?>

    <?php // echo $form->field($model, 'covid19_status_cd') ?>

    <?php // echo $form->field($model, 'nomor_kartu_t') ?>

    <?php // echo $form->field($model, 'episodes1') ?>

    <?php // echo $form->field($model, 'episodes2') ?>

    <?php // echo $form->field($model, 'episodes3') ?>

    <?php // echo $form->field($model, 'episodes4') ?>

    <?php // echo $form->field($model, 'episodes5') ?>

    <?php // echo $form->field($model, 'episodes6') ?>

    <?php // echo $form->field($model, 'covid19_cc_ind') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
