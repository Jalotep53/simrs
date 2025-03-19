<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryPaymentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="temporary-payment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'temp1') ?>

    <?= $form->field($model, 'temp2') ?>

    <?= $form->field($model, 'temp3') ?>

    <?= $form->field($model, 'temp4') ?>

    <?php // echo $form->field($model, 'temp5') ?>

    <?php // echo $form->field($model, 'temp6') ?>

    <?php // echo $form->field($model, 'temp7') ?>

    <?php // echo $form->field($model, 'temp8') ?>

    <?php // echo $form->field($model, 'temp9') ?>

    <?php // echo $form->field($model, 'temp10') ?>

    <?php // echo $form->field($model, 'temp11') ?>

    <?php // echo $form->field($model, 'temp12') ?>

    <?php // echo $form->field($model, 'temp13') ?>

    <?php // echo $form->field($model, 'temp14') ?>

    <?php // echo $form->field($model, 'temp15') ?>

    <?php // echo $form->field($model, 'temp16') ?>

    <?php // echo $form->field($model, 'temp17') ?>

    <?php // echo $form->field($model, 'temp18') ?>

    <?php // echo $form->field($model, 'temp19') ?>

    <?php // echo $form->field($model, 'temp20') ?>

    <?php // echo $form->field($model, 'temp21') ?>

    <?php // echo $form->field($model, 'temp22') ?>

    <?php // echo $form->field($model, 'temp23') ?>

    <?php // echo $form->field($model, 'temp24') ?>

    <?php // echo $form->field($model, 'temp25') ?>

    <?php // echo $form->field($model, 'temp26') ?>

    <?php // echo $form->field($model, 'temp27') ?>

    <?php // echo $form->field($model, 'temp28') ?>

    <?php // echo $form->field($model, 'temp29') ?>

    <?php // echo $form->field($model, 'temp30') ?>

    <?php // echo $form->field($model, 'temp31') ?>

    <?php // echo $form->field($model, 'temp32') ?>

    <?php // echo $form->field($model, 'temp33') ?>

    <?php // echo $form->field($model, 'temp34') ?>

    <?php // echo $form->field($model, 'temp35') ?>

    <?php // echo $form->field($model, 'temp36') ?>

    <?php // echo $form->field($model, 'temp37') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
