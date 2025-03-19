<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataKlasifikasiPasienRanap $model */

$this->title = 'Update Data Klasifikasi Pasien Ranap: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Data Klasifikasi Pasien Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-klasifikasi-pasien-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
