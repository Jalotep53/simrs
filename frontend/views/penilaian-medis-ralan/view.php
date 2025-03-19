<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-view">

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
            'tanggal',
            'kd_dokter',
            'anamnesis',
            'hubungan',
            'keluhan_utama',
            'rps',
            'rpd',
            'rpk',
            'rpo',
            'alergi',
            'keadaan',
            'gcs',
            'kesadaran',
            'td',
            'nadi',
            'rr',
            'suhu',
            'spo',
            'bb',
            'tb',
            'kepala',
            'gigi',
            'tht',
            'thoraks',
            'abdomen',
            'genital',
            'ekstremitas',
            'kulit',
            'ket_fisik:ntext',
            'ket_lokalis:ntext',
            'penunjang:ntext',
            'diagnosis',
            'tata:ntext',
            'konsulrujuk',
        ],
    ]) ?>

</div>
