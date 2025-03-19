<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususDiagnosaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-khusus-diagnosa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rujukan') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'kode_diagnosa') ?>

    <?= $form->field($model, 'nama_diagnosa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
