<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MonitoringReaksiTranfusi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring Reaksi Tranfusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="monitoring-reaksi-tranfusi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], [
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
            'tgl_perawatan',
            'jam_rawat',
            'produk_darah',
            'no_kantong',
            'lokasi_insersi',
            'td',
            'hr',
            'rr',
            'suhu',
            'jenis_reaksi_alergi',
            'keterangan',
            'nip',
        ],
    ]) ?>

</div>
