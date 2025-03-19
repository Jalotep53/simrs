<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterDpjpvclaimSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-dokter-dpjpvclaim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'kd_dokter_bpjs') ?>

    <?= $form->field($model, 'nm_dokter_bpjs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
