<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRuanglabpa $model */

$this->title = $model->id_lokasi_satusehat;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ruanglabpas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satu-sehat-mapping-lokasi-ruanglabpa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_lokasi_satusehat' => $model->id_lokasi_satusehat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_lokasi_satusehat' => $model->id_lokasi_satusehat], [
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
            'id_organisasi_satusehat',
            'id_lokasi_satusehat',
            'longitude',
            'latitude',
            'altittude',
        ],
    ]) ?>

</div>
