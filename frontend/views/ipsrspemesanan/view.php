<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrspemesanan $model */

$this->title = $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrspemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ipsrspemesanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_faktur' => $model->no_faktur], [
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
            'no_faktur',
            'no_order',
            'kode_suplier',
            'nip',
            'tgl_pesan',
            'tgl_faktur',
            'tgl_tempo',
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
