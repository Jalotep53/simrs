<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareObatDiberikan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Obat Diberikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pcare-obat-diberikan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur], [
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
            'noKunjungan',
            'kdObatSK',
            'tgl_perawatan',
            'jam',
            'kode_brng',
            'no_batch',
            'no_faktur',
        ],
    ]) ?>

</div>
