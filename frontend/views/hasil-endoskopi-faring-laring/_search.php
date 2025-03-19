<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaringSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-endoskopi-faring-laring-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'diagnosa_klinis') ?>

    <?= $form->field($model, 'kiriman_dari') ?>

    <?php // echo $form->field($model, 'faring_uvula') ?>

    <?php // echo $form->field($model, 'faring_arkus_faring') ?>

    <?php // echo $form->field($model, 'faring_dinding_posterior') ?>

    <?php // echo $form->field($model, 'faring_tonsil') ?>

    <?php // echo $form->field($model, 'laring_tonsil_lingual') ?>

    <?php // echo $form->field($model, 'laring_valekula') ?>

    <?php // echo $form->field($model, 'laring_sinus_piriformis') ?>

    <?php // echo $form->field($model, 'laring_epiglotis') ?>

    <?php // echo $form->field($model, 'laring_arytenoid') ?>

    <?php // echo $form->field($model, 'laring_plika_ventrikularis') ?>

    <?php // echo $form->field($model, 'laring_pita_suara') ?>

    <?php // echo $form->field($model, 'laring_rima_vocalis') ?>

    <?php // echo $form->field($model, 'laring_lainlain') ?>

    <?php // echo $form->field($model, 'kesan') ?>

    <?php // echo $form->field($model, 'saran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
