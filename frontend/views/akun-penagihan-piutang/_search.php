<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPenagihanPiutangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akun-penagihan-piutang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_rek') ?>

    <?= $form->field($model, 'nama_bank') ?>

    <?= $form->field($model, 'atas_nama') ?>

    <?= $form->field($model, 'no_rek') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
