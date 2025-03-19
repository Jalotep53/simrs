<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkdpBpjs $model */

$this->title = $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Skdp Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skdp-bpjs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tahun' => $model->tahun, 'no_antrian' => $model->no_antrian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tahun' => $model->tahun, 'no_antrian' => $model->no_antrian], [
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
            'tahun',
            'no_rkm_medis',
            'diagnosa',
            'terapi',
            'alasan1',
            'alasan2',
            'rtl1',
            'rtl2',
            'tanggal_datang',
            'tanggal_rujukan',
            'no_antrian',
            'kd_dokter',
            'status',
        ],
    ]) ?>

</div>
