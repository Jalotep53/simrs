<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRanap $model */

$this->title = $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satu-sehat-mapping-lokasi-ranap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_kamar' => $model->kd_kamar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_kamar' => $model->kd_kamar], [
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
            'kd_kamar',
            'id_organisasi_satusehat',
            'id_lokasi_satusehat',
            'longitude',
            'latitude',
            'altittude',
        ],
    ]) ?>

</div>
