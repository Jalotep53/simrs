<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsLokasiKejadian $model */

$this->title = $model->kode_lokasi;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Lokasi Kejadians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="k3rs-lokasi-kejadian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_lokasi' => $model->kode_lokasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_lokasi' => $model->kode_lokasi], [
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
            'kode_lokasi',
            'lokasi_kejadian',
        ],
    ]) ?>

</div>
