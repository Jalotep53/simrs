<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPengambilanMedisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-pengambilan-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'jml') ?>

    <?= $form->field($model, 'hargabeli') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'kd_bangsal_dr') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
