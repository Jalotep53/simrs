<?php

use frontend\models\ResepDokterRacikanDetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepDokterRacikanDetailSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resep Dokter Racikan Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-dokter-racikan-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Dokter Racikan Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'no_racik',
            'kode_brng',
            'p1',
            'p2',
            //'kandungan',
            //'jml',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResepDokterRacikanDetail $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
