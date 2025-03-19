<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sep') ?>

    <?= $form->field($model, 'tglRujukan') ?>

    <?= $form->field($model, 'tglRencanaKunjungan') ?>

    <?= $form->field($model, 'ppkDirujuk') ?>

    <?= $form->field($model, 'nm_ppkDirujuk') ?>

    <?php // echo $form->field($model, 'jnsPelayanan') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'diagRujukan') ?>

    <?php // echo $form->field($model, 'nama_diagRujukan') ?>

    <?php // echo $form->field($model, 'tipeRujukan') ?>

    <?php // echo $form->field($model, 'poliRujukan') ?>

    <?php // echo $form->field($model, 'nama_poliRujukan') ?>

    <?php // echo $form->field($model, 'no_rujukan') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
