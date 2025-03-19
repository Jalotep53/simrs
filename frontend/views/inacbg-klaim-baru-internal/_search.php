<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaruInternalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inacbg-klaim-baru-internal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sep') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'admission_id') ?>

    <?= $form->field($model, 'hospital_admission_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
