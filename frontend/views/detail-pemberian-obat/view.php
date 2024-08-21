<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPemberianObat $model */

$this->title = $model->tgl_perawatan;
$this->params['breadcrumbs'][] = ['label' => 'Detail Pemberian Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-pemberian-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], [
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
            'tgl_perawatan',
            'jam',
            'no_rawat',
            'kode_brng',
            'h_beli',
            'biaya_obat',
            'jml',
            'embalase',
            'tuslah',
            'total',
            'status',
            'kd_bangsal',
            'no_batch',
            'no_faktur',
        ],
    ]) ?>

</div>
