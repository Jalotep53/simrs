<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingInhealthSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-inhealth-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sjp') ?>

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

    <?php // echo $form->field($model, 'diagawal2') ?>

    <?php // echo $form->field($model, 'nmdiagnosaawal2') ?>

    <?php // echo $form->field($model, 'kdpolitujuan') ?>

    <?php // echo $form->field($model, 'nmpolitujuan') ?>

    <?php // echo $form->field($model, 'klsrawat') ?>

    <?php // echo $form->field($model, 'klsdesc') ?>

    <?php // echo $form->field($model, 'kdbu') ?>

    <?php // echo $form->field($model, 'nmbu') ?>

    <?php // echo $form->field($model, 'lakalantas') ?>

    <?php // echo $form->field($model, 'lokasilaka') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'nomr') ?>

    <?php // echo $form->field($model, 'nama_pasien') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'jkel') ?>

    <?php // echo $form->field($model, 'no_kartu') ?>

    <?php // echo $form->field($model, 'tglpulang') ?>

    <?php // echo $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'plandesc') ?>

    <?php // echo $form->field($model, 'idakomodasi') ?>

    <?php // echo $form->field($model, 'tipesjp') ?>

    <?php // echo $form->field($model, 'tipecob') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
