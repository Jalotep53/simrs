<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanEwsNeonatusSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-ews-neonatus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'parameter1') ?>

    <?= $form->field($model, 'skor1') ?>

    <?= $form->field($model, 'parameter2') ?>

    <?php // echo $form->field($model, 'skor2') ?>

    <?php // echo $form->field($model, 'parameter3') ?>

    <?php // echo $form->field($model, 'skor3') ?>

    <?php // echo $form->field($model, 'parameter4') ?>

    <?php // echo $form->field($model, 'skor4') ?>

    <?php // echo $form->field($model, 'parameter5') ?>

    <?php // echo $form->field($model, 'skor5') ?>

    <?php // echo $form->field($model, 'parameter6') ?>

    <?php // echo $form->field($model, 'skor6') ?>

    <?php // echo $form->field($model, 'parameter7') ?>

    <?php // echo $form->field($model, 'skor7') ?>

    <?php // echo $form->field($model, 'parameter8') ?>

    <?php // echo $form->field($model, 'skor8') ?>

    <?php // echo $form->field($model, 'skor_total') ?>

    <?php // echo $form->field($model, 'parameter_total') ?>

    <?php // echo $form->field($model, 'code_blue') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
