<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDendaHarian $model */

$this->title = $model->tgl_denda;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Bayar Denda Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perpustakaan-bayar-denda-harian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris], [
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
            'tgl_denda',
            'no_anggota',
            'no_inventaris',
            'keterlambatan',
            'besar_denda',
        ],
    ]) ?>

</div>
