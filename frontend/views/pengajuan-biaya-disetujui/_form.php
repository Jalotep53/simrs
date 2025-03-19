<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiayaDisetujui $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengajuan-biaya-disetujui-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
