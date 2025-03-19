<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingInhealth $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-inhealth-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglsep')->textInput() ?>

    <?= $form->field($model, 'tglrujukan')->textInput() ?>

    <?= $form->field($model, 'no_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdppkrujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmppkrujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdppkpelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmppkpelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jnspelayanan')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagawal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdiagnosaawal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagawal2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdiagnosaawal2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdpolitujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmpolitujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klsrawat')->dropDownList([ '000' => '000', 100 => '100', 101 => '101', 102 => '102', 103 => '103', 104 => '104', 110 => '110', 200 => '200', 201 => '201', 202 => '202', 203 => '203', 204 => '204', 210 => '210', 300 => '300', 301 => '301', 302 => '302', 303 => '303', 304 => '304', 310 => '310', 311 => '311', 312 => '312', 400 => '400', 401 => '401', 402 => '402', 403 => '403', 404 => '404', 410 => '410', 411 => '411', 412 => '412', 413 => '413', 500 => '500', 510 => '510', 511 => '511', 512 => '512', 610 => '610', 611 => '611', 612 => '612', 613 => '613', 710 => '710', 711 => '711', 712 => '712', 713 => '713', 910 => '910', 911 => '911', 912 => '912', 913 => '913', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'klsdesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdbu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmbu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lakalantas')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lokasilaka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jkel')->dropDownList([ 'LAKI-LAKI' => 'LAKI-LAKI', 'PEREMPUAN' => 'PEREMPUAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_kartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglpulang')->textInput() ?>

    <?= $form->field($model, 'plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plandesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idakomodasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipesjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipecob')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
