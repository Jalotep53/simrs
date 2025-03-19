<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsBagianTubuh $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-bagian-tubuh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_bagian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bagian_tubuh')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
