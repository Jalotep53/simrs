<?php

use frontend\models\SatuSehatMappingLokasiRalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Mapping Lokasi Ralans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-ralan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Mapping Lokasi Ralan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_poli',
            'id_organisasi_satusehat',
            'id_lokasi_satusehat',
            'longitude',
            'latitude',
            //'altittude',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMappingLokasiRalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_poli' => $model->kd_poli]);
                 }
            ],
        ],
    ]); ?>


</div>
