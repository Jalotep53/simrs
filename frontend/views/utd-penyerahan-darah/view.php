<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarah $model */

$this->title = $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="utd-penyerahan-darah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_penyerahan' => $model->no_penyerahan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_penyerahan' => $model->no_penyerahan], [
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
            'no_penyerahan',
            'tanggal',
            'dinas',
            'nip_cross',
            'keterangan',
            'status',
            'kd_rek',
            'pengambil_darah',
            'alamat_pengambil_darah',
            'nip_pj',
            'besarppn',
        ],
    ]) ?>

</div>
