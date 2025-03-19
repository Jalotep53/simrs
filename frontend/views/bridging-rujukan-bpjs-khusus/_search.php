<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-khusus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rujukan') ?>

    <?= $form->field($model, 'nokapst') ?>

    <?= $form->field($model, 'nmpst') ?>

    <?= $form->field($model, 'tglrujukan_awal') ?>

    <?= $form->field($model, 'tglrujukan_berakhir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
