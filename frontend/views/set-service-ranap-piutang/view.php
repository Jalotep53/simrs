<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetServiceRanapPiutang $model */

$this->title = $model->nama_service;
$this->params['breadcrumbs'][] = ['label' => 'Set Service Ranap Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-service-ranap-piutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nama_service' => $model->nama_service], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nama_service' => $model->nama_service], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama_service',
            'besar',
            'laborat',
            'radiologi',
            'operasi',
            'obat',
            'ranap_dokter',
            'ranap_paramedis',
            'ralan_dokter',
            'ralan_paramedis',
            'tambahan',
            'potongan',
            'kamar',
            'registrasi',
            'harian',
            'retur_Obat',
            'resep_Pulang',
        ],
    ]) ?>

</div>
