<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananMedis $model */

$this->title = $model->no_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pemesanan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-pemesanan-medis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_pemesanan' => $model->no_pemesanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_pemesanan' => $model->no_pemesanan], [
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
            'no_pemesanan',
            'kode_suplier',
            'nip',
            'tanggal',
            'total1',
            'potongan',
            'total2',
            'ppn',
            'meterai',
            'tagihan',
            'status',
        ],
    ]) ?>

</div>
