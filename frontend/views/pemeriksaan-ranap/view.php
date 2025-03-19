<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanRanap $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaan Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemeriksaan-ranap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat], [
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
            'tgl_perawatan',
            'jam_rawat',
            'suhu_tubuh',
            'tensi',
            'nadi',
            'respirasi',
            'tinggi',
            'berat',
            'spo2',
            'gcs',
            'kesadaran',
            'keluhan',
            'pemeriksaan',
            'alergi',
            'penilaian',
            'rtl',
            'instruksi',
            'evaluasi',
            'nip',
        ],
    ]) ?>

</div>
