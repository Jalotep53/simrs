<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TokoPengajuanBarang $model */

$this->title = $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Toko Pengajuan Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="toko-pengajuan-barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_pengajuan' => $model->no_pengajuan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_pengajuan' => $model->no_pengajuan], [
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
            'no_pengajuan',
            'nip',
            'tanggal',
            'status',
            'keterangan',
        ],
    ]) ?>

</div>
