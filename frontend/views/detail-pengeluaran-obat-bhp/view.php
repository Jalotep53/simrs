<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPengeluaranObatBhp $model */

$this->title = $model->no_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Detail Pengeluaran Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-pengeluaran-obat-bhp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_keluar' => $model->no_keluar, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_keluar' => $model->no_keluar, 'kode_brng' => $model->kode_brng], [
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
            'no_keluar',
            'kode_brng',
            'kode_sat',
            'no_batch',
            'jumlah',
            'harga_beli',
            'total',
            'no_faktur',
        ],
    ]) ?>

</div>
