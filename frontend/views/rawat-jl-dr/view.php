<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlDr $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rawat Jl Drs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rawat-jl-dr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_dokter' => $model->kd_dokter, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_dokter' => $model->kd_dokter, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], [
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
            'no_rawat',
            'kd_jenis_prw',
            'kd_dokter',
            'tgl_perawatan',
            'jam_rawat',
            'material',
            'bhp',
            'tarif_tindakandr',
            'kso',
            'menejemen',
            'biaya_rawat',
            'stts_bayar',
        ],
    ]) ?>

</div>
