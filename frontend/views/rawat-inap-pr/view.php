<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapPr $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rawat Inap Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rawat-inap-pr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], [
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
            'kd_jenis_prw',
            'nip',
            'tgl_perawatan',
            'jam_rawat',
            'material',
            'bhp',
            'tarif_tindakanpr',
            'kso',
            'menejemen',
            'biaya_rawat',
        ],
    ]) ?>

</div>
