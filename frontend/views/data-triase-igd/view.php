<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgd $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Data Triase Igds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-triase-igd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'tgl_kunjungan',
            'cara_masuk',
            'alat_transportasi',
            'alasan_kedatangan',
            'keterangan_kedatangan',
            'kode_kasus',
            'tekanan_darah',
            'nadi',
            'pernapasan',
            'suhu',
            'saturasi_o2',
            'nyeri',
        ],
    ]) ?>

</div>
