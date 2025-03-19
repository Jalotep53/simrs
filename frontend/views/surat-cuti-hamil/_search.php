<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratCutiHamilSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-cuti-hamil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'keterangan_hamil') ?>

    <?= $form->field($model, 'terhitung_mulai') ?>

    <?= $form->field($model, 'perkiraan_lahir') ?>

    <?= $form->field($model, 'no_surat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
