<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DataBatch $model */

$this->title = $model->no_batch;
$this->params['breadcrumbs'][] = ['label' => 'Data Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-batch-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_batch' => $model->no_batch, 'kode_brng' => $model->kode_brng, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_batch' => $model->no_batch, 'kode_brng' => $model->kode_brng, 'no_faktur' => $model->no_faktur], [
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
            'no_batch',
            'kode_brng',
            'tgl_beli',
            'tgl_kadaluarsa',
            'asal',
            'no_faktur',
            'dasar',
            'h_beli',
            'ralan',
            'kelas1',
            'kelas2',
            'kelas3',
            'utama',
            'vip',
            'vvip',
            'beliluar',
            'jualbebas',
            'karyawan',
            'jumlahbeli',
            'sisa',
        ],
    ]) ?>

</div>
