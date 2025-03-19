<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanranapDokterRs $model */

$this->title = 'Update Rujukanranap Dokter Rs: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Rujukanranap Dokter Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'kd_dokter' => $model->kd_dokter, 'no_rkm_medis' => $model->no_rkm_medis, 'kd_kamar' => $model->kd_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rujukanranap-dokter-rs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
