<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenatalaksanaanTerapiOkupasi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penatalaksanaan Terapi Okupasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penatalaksanaan-terapi-okupasi-view">

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
            'nip',
            'keluhan_utama',
            'rpd',
            'rps',
            'anamnesa_general',
            'tanda_vital',
            'pemeriksaan_penunjang',
            'spesialisasi',
            'keterangan_spesialisasi',
            'pemeriksaan_okupasi_terapi',
            'aset',
            'limitasi',
            'diagnosa_terapi_okupasi',
            'rencana_intervensi',
        ],
    ]) ?>

</div>
