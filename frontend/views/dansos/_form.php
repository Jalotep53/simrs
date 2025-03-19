<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Dansos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dansos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dana')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
