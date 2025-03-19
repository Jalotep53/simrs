<?php

use frontend\models\SatuSehatMappingLokasiRuangok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRuangokSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Mapping Lokasi Ruangoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-ruangok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Mapping Lokasi Ruangok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_organisasi_satusehat',
            'id_lokasi_satusehat',
            'longitude',
            'latitude',
            'altittude',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatMappingLokasiRuangok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_lokasi_satusehat' => $model->id_lokasi_satusehat]);
                 }
            ],
        ],
    ]); ?>


</div>
