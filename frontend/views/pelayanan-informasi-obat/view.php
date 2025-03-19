<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PelayananInformasiObat $model */

$this->title = $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Pelayanan Informasi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pelayanan-informasi-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_permintaan' => $model->no_permintaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_permintaan' => $model->no_permintaan], [
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
            'no_permintaan',
            'no_rawat',
            'tanggal',
            'metode',
            'penanya',
            'status_penanya',
            'no_telp_penanya',
            'jenis_pertanyaan',
            'keterangan_jenis_pertanyaan',
            'uraian_pertanyaan',
        ],
    ]) ?>

</div>
