<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepPulang $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Resep Pulangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resep-pulang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], [
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
            'no_rawat',
            'kode_brng',
            'jml_barang',
            'harga',
            'total',
            'dosis',
            'tanggal',
            'jam',
            'kd_bangsal',
            'no_batch',
            'no_faktur',
        ],
    ]) ?>

</div>
