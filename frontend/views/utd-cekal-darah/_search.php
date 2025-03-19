<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdCekalDarahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-cekal-darah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_donor') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'dinas') ?>

    <?= $form->field($model, 'petugas_pemusnahan') ?>

    <?= $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
