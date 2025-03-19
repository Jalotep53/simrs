<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RuangAuditKepatuhan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ruang-audit-kepatuhan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ruang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
