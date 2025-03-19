<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSepSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-sep-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sep') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tglsep') ?>

    <?= $form->field($model, 'tglrujukan') ?>

    <?= $form->field($model, 'no_rujukan') ?>

    <?php // echo $form->field($model, 'kdppkrujukan') ?>

    <?php // echo $form->field($model, 'nmppkrujukan') ?>

    <?php // echo $form->field($model, 'kdppkpelayanan') ?>

    <?php // echo $form->field($model, 'nmppkpelayanan') ?>

    <?php // echo $form->field($model, 'jnspelayanan') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'diagawal') ?>

    <?php // echo $form->field($model, 'nmdiagnosaawal') ?>

    <?php // echo $form->field($model, 'kdpolitujuan') ?>

    <?php // echo $form->field($model, 'nmpolitujuan') ?>

    <?php // echo $form->field($model, 'klsrawat') ?>

    <?php // echo $form->field($model, 'klsnaik') ?>

    <?php // echo $form->field($model, 'pembiayaan') ?>

    <?php // echo $form->field($model, 'pjnaikkelas') ?>

    <?php // echo $form->field($model, 'lakalantas') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'nomr') ?>

    <?php // echo $form->field($model, 'nama_pasien') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'peserta') ?>

    <?php // echo $form->field($model, 'jkel') ?>

    <?php // echo $form->field($model, 'no_kartu') ?>

    <?php // echo $form->field($model, 'tglpulang') ?>

    <?php // echo $form->field($model, 'asal_rujukan') ?>

    <?php // echo $form->field($model, 'eksekutif') ?>

    <?php // echo $form->field($model, 'cob') ?>

    <?php // echo $form->field($model, 'notelep') ?>

    <?php // echo $form->field($model, 'katarak') ?>

    <?php // echo $form->field($model, 'tglkkl') ?>

    <?php // echo $form->field($model, 'keterangankkl') ?>

    <?php // echo $form->field($model, 'suplesi') ?>

    <?php // echo $form->field($model, 'no_sep_suplesi') ?>

    <?php // echo $form->field($model, 'kdprop') ?>

    <?php // echo $form->field($model, 'nmprop') ?>

    <?php // echo $form->field($model, 'kdkab') ?>

    <?php // echo $form->field($model, 'nmkab') ?>

    <?php // echo $form->field($model, 'kdkec') ?>

    <?php // echo $form->field($model, 'nmkec') ?>

    <?php // echo $form->field($model, 'noskdp') ?>

    <?php // echo $form->field($model, 'kddpjp') ?>

    <?php // echo $form->field($model, 'nmdpdjp') ?>

    <?php // echo $form->field($model, 'tujuankunjungan') ?>

    <?php // echo $form->field($model, 'flagprosedur') ?>

    <?php // echo $form->field($model, 'penunjang') ?>

    <?php // echo $form->field($model, 'asesmenpelayanan') ?>

    <?php // echo $form->field($model, 'kddpjplayanan') ?>

    <?php // echo $form->field($model, 'nmdpjplayanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
