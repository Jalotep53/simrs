<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarSetNomorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-keluar-set-nomor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_no_surat') ?>

    <?= $form->field($model, 'jenis_surat') ?>

    <?= $form->field($model, 'digit_1') ?>

    <?= $form->field($model, 'digit_2') ?>

    <?= $form->field($model, 'digit_3') ?>

    <?php // echo $form->field($model, 'digit_4') ?>

    <?php // echo $form->field($model, 'digit_5') ?>

    <?php // echo $form->field($model, 'digit_6') ?>

    <?php // echo $form->field($model, 'digit_7') ?>

    <?php // echo $form->field($model, 'digit_8') ?>

    <?php // echo $form->field($model, 'digit_9') ?>

    <?php // echo $form->field($model, 'digit_10') ?>

    <?php // echo $form->field($model, 'digit_11') ?>

    <?php // echo $form->field($model, 'digit_12') ?>

    <?php // echo $form->field($model, 'digit_13') ?>

    <?php // echo $form->field($model, 'digit_14') ?>

    <?php // echo $form->field($model, 'digit_15') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
