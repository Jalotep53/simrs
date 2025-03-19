<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\StokObatPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="stok-obat-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'kd_bangsal') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <?php // echo $form->field($model, 'aturan_pakai') ?>

    <?php // echo $form->field($model, 'jam00') ?>

    <?php // echo $form->field($model, 'jam01') ?>

    <?php // echo $form->field($model, 'jam02') ?>

    <?php // echo $form->field($model, 'jam03') ?>

    <?php // echo $form->field($model, 'jam04') ?>

    <?php // echo $form->field($model, 'jam05') ?>

    <?php // echo $form->field($model, 'jam06') ?>

    <?php // echo $form->field($model, 'jam07') ?>

    <?php // echo $form->field($model, 'jam08') ?>

    <?php // echo $form->field($model, 'jam09') ?>

    <?php // echo $form->field($model, 'jam10') ?>

    <?php // echo $form->field($model, 'jam11') ?>

    <?php // echo $form->field($model, 'jam12') ?>

    <?php // echo $form->field($model, 'jam13') ?>

    <?php // echo $form->field($model, 'jam14') ?>

    <?php // echo $form->field($model, 'jam15') ?>

    <?php // echo $form->field($model, 'jam16') ?>

    <?php // echo $form->field($model, 'jam17') ?>

    <?php // echo $form->field($model, 'jam18') ?>

    <?php // echo $form->field($model, 'jam19') ?>

    <?php // echo $form->field($model, 'jam20') ?>

    <?php // echo $form->field($model, 'jam21') ?>

    <?php // echo $form->field($model, 'jam22') ?>

    <?php // echo $form->field($model, 'jam23') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
