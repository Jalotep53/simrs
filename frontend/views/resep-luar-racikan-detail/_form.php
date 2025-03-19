<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarRacikanDetail $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resep-luar-racikan-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p1')->textInput() ?>

    <?= $form->field($model, 'p2')->textInput() ?>

    <?= $form->field($model, 'kandungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
