<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanAdimeGiziSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-adime-gizi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'asesmen') ?>

    <?= $form->field($model, 'diagnosis') ?>

    <?= $form->field($model, 'intervensi') ?>

    <?php // echo $form->field($model, 'monitoring') ?>

    <?php // echo $form->field($model, 'evaluasi') ?>

    <?php // echo $form->field($model, 'instruksi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
