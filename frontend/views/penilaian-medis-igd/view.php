<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisIgd $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Igds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-igd-view">

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
            'mata',
            'gigi',
            'leher',
            'thoraks',
            'abdomen',
            'genital',
            'ekstremitas',
            'ket_fisik:ntext',
            'ket_lokalis:ntext',
            'ekg:ntext',
            'rad:ntext',
            'lab:ntext',
            'diagnosis',
            'tata:ntext',
        ],
    ]) ?>

</div>
