<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\KamarInap $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kamar-inap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk], [
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
            'kd_kamar',
            'trf_kamar',
            'diagnosa_awal',
            'diagnosa_akhir',
            'tgl_masuk',
            'jam_masuk',
            'tgl_keluar',
            'jam_keluar',
            'lama',
            'ttl_biaya',
            'stts_pulang',
        ],
    ]) ?>

</div>
