<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesanan $model */

$this->title = $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bayar-pemesanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti], [
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
            'tgl_bayar',
            'no_faktur',
            'nip',
            'besar_bayar',
            'keterangan',
            'nama_bayar',
            'no_bukti',
        ],
    ]) ?>

</div>
