<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SigninSebelumAnestesi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Signin Sebelum Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="signin-sebelum-anestesi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'sncn',
            'tindakan',
            'kd_dokter_bedah',
            'kd_dokter_anestesi',
            'identitas',
            'penandaan_area_operasi',
            'alergi',
            'resiko_aspirasi',
            'resiko_aspirasi_rencana_antisipasi',
            'resiko_kehilangan_darah',
            'resiko_kehilangan_darah_line',
            'resiko_kehilangan_darah_rencana_antisipasi',
            'kesiapan_alat_obat_anestesi',
            'kesiapan_alat_obat_anestesi_rencana_antisipasi',
            'nip_perawat_ok',
        ],
    ]) ?>

</div>
