<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahMulut $model */

$this->title = 'Update Penilaian Medis Ralan Bedah Mulut: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Bedah Muluts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-medis-ralan-bedah-mulut-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
