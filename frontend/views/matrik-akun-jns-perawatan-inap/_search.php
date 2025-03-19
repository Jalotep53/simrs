<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatanInapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="matrik-akun-jns-perawatan-inap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'pendapatan_tindakan') ?>

    <?= $form->field($model, 'beban_jasa_dokter') ?>

    <?= $form->field($model, 'utang_jasa_dokter') ?>

    <?= $form->field($model, 'beban_jasa_paramedis') ?>

    <?php // echo $form->field($model, 'utang_jasa_paramedis') ?>

    <?php // echo $form->field($model, 'beban_kso') ?>

    <?php // echo $form->field($model, 'utang_kso') ?>

    <?php // echo $form->field($model, 'hpp_persediaan') ?>

    <?php // echo $form->field($model, 'persediaan_bhp') ?>

    <?php // echo $form->field($model, 'beban_jasa_sarana') ?>

    <?php // echo $form->field($model, 'utang_jasa_sarana') ?>

    <?php // echo $form->field($model, 'beban_menejemen') ?>

    <?php // echo $form->field($model, 'utang_menejemen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
