<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanInventaris $model */

$this->title = $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Pemeliharaan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemeliharaan-inventaris-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_inventaris' => $model->no_inventaris, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_inventaris' => $model->no_inventaris, 'tanggal' => $model->tanggal], [
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
            'tanggal',
            'uraian_kegiatan',
            'nip',
            'pelaksana',
            'biaya',
            'jenis_pemeliharaan',
        ],
    ]) ?>

</div>
