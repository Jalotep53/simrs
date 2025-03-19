<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CssdBarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cssd-barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_inventaris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_barang')->dropDownList([ 'Heacting Set' => 'Heacting Set', 'Partus Set' => 'Partus Set', 'Set Bedah' => 'Set Bedah', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
