<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDetailPemisahanKomponen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-detail-pemisahan-komponen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_donor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kantong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_komponen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_kadaluarsa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
