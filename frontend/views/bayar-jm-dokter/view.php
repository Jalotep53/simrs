<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarJmDokter $model */

$this->title = $model->no_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Jm Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bayar-jm-dokter-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_bayar' => $model->no_bayar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_bayar' => $model->no_bayar], [
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
            'no_bayar',
            'tanggal',
            'kd_dokter',
            'besar_bayar',
            'nama_bayar',
            'keterangan',
            'rawatjalan',
            'rawatinap',
            'labrawatjalan',
            'labrawatinap',
            'radrawatjalan',
            'radrawatinap',
            'operasiralan',
            'operasiranap',
        ],
    ]) ?>

</div>
