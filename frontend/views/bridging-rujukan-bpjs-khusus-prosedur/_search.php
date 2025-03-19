<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususProsedurSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-khusus-prosedur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rujukan') ?>

    <?= $form->field($model, 'kode_prosedur') ?>

    <?= $form->field($model, 'nama_prosedur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
