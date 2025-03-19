<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Penjualan $model */

$this->title = $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_jual' => $model->nota_jual], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_jual' => $model->nota_jual], [
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
            'nota_jual',
            'tgl_jual',
            'nip',
            'no_rkm_medis',
            'nm_pasien',
            'keterangan',
            'jns_jual',
            'ongkir',
            'ppn',
            'status',
            'kd_bangsal',
            'kd_rek',
            'nama_bayar',
        ],
    ]) ?>

</div>
