<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikan $model */

$this->title = $model->tgl_perawatan;
$this->params['breadcrumbs'][] = ['label' => 'Obat Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obat-racikan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik], [
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
            'tgl_perawatan',
            'jam',
            'no_rawat',
            'no_racik',
            'nama_racik',
            'kd_racik',
            'jml_dr',
            'aturan_pakai',
            'keterangan',
        ],
    ]) ?>

</div>
