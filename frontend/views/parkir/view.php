<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Parkir $model */

$this->title = $model->no_kendaraan;
$this->params['breadcrumbs'][] = ['label' => 'Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="parkir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_kendaraan' => $model->no_kendaraan, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_kendaraan' => $model->no_kendaraan, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk], [
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
            'nip',
            'nomer_kartu',
            'kd_parkir',
            'no_kendaraan',
            'tgl_masuk',
            'jam_masuk',
            'tgl_keluar',
            'jam_keluar',
            'lama_parkir',
            'ttl_biaya',
        ],
    ]) ?>

</div>
