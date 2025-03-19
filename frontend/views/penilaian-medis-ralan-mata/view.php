<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanMata $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Matas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-mata-view">

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
            'rpo',
            'alergi',
            'status',
            'td',
            'nadi',
            'rr',
            'suhu',
            'nyeri',
            'bb',
            'visuskanan',
            'visuskiri',
            'cckanan',
            'cckiri',
            'palkanan',
            'palkiri',
            'conkanan',
            'conkiri',
            'corneakanan',
            'corneakiri',
            'coakanan',
            'coakiri',
            'pupilkanan',
            'pupilkiri',
            'lensakanan',
            'lensakiri',
            'funduskanan',
            'funduskiri',
            'papilkanan',
            'papilkiri',
            'retinakanan',
            'retinakiri',
            'makulakanan',
            'makulakiri',
            'tiokanan',
            'tiokiri',
            'mbokanan',
            'mbokiri',
            'lab:ntext',
            'rad:ntext',
            'penunjang:ntext',
            'tes:ntext',
            'pemeriksaan:ntext',
            'diagnosis',
            'diagnosisbdg',
            'permasalahan:ntext',
            'terapi:ntext',
            'tindakan:ntext',
            'edukasi',
        ],
    ]) ?>

</div>
