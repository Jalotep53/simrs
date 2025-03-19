<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangLainlain $model */

$this->title = $model->tgl_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Piutang Lainlains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bayar-piutang-lainlain-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_bayar' => $model->tgl_bayar, 'kode_peminjam' => $model->kode_peminjam, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'nama_bayar' => $model->nama_bayar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_bayar' => $model->tgl_bayar, 'kode_peminjam' => $model->kode_peminjam, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'nama_bayar' => $model->nama_bayar], [
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
            'kode_peminjam',
            'besar_cicilan',
            'keterangan',
            'nota_piutang',
            'kd_rek',
            'nama_bayar',
        ],
    ]) ?>

</div>
