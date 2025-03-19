<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanInventaris $model */

$this->title = $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perpustakaan-inventaris-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_inventaris' => $model->no_inventaris], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_inventaris' => $model->no_inventaris], [
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
            'no_inventaris',
            'kode_buku',
            'asal_buku',
            'tgl_pengadaan',
            'harga',
            'status_buku',
            'kd_ruang',
            'no_rak',
            'no_box',
        ],
    ]) ?>

</div>
