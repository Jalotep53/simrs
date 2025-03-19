<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala4 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igddetail-skala4-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_skala4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
