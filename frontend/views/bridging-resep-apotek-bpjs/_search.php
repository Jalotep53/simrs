<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingResepApotekBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-resep-apotek-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sep') ?>

    <?= $form->field($model, 'no_sep_apotek') ?>

    <?= $form->field($model, 'tgl_sep') ?>

    <?= $form->field($model, 'kdpoli') ?>

    <?= $form->field($model, 'nmpoli') ?>

    <?php // echo $form->field($model, 'kdjenis') ?>

    <?php // echo $form->field($model, 'nota_piutang') ?>

    <?php // echo $form->field($model, 'id_user_sep') ?>

    <?php // echo $form->field($model, 'tgl_resep') ?>

    <?php // echo $form->field($model, 'tgl_pelayanan') ?>

    <?php // echo $form->field($model, 'kodedpjp') ?>

    <?php // echo $form->field($model, 'nmdpjp') ?>

    <?php // echo $form->field($model, 'iterasi') ?>

    <?php // echo $form->field($model, 'no_kartu') ?>

    <?php // echo $form->field($model, 'nama_pasien') ?>

    <?php // echo $form->field($model, 'kdppkrujukan') ?>

    <?php // echo $form->field($model, 'nmppkpelayanan') ?>

    <?php // echo $form->field($model, 'byTagRsp') ?>

    <?php // echo $form->field($model, 'byVerRsp') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
