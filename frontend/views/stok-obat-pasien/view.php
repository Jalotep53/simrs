<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\StokObatPasien $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Stok Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stok-obat-pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], [
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
            'tanggal',
            'jam',
            'no_rawat',
            'kode_brng',
            'jumlah',
            'kd_bangsal',
            'no_batch',
            'no_faktur',
            'aturan_pakai',
            'jam00',
            'jam01',
            'jam02',
            'jam03',
            'jam04',
            'jam05',
            'jam06',
            'jam07',
            'jam08',
            'jam09',
            'jam10',
            'jam11',
            'jam12',
            'jam13',
            'jam14',
            'jam15',
            'jam16',
            'jam17',
            'jam18',
            'jam19',
            'jam20',
            'jam21',
            'jam22',
            'jam23',
        ],
    ]) ?>

</div>
