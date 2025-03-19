<?php

use frontend\models\KonverSat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KonverSatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Konver Sats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konver-sat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Konver Sat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nilai',
            'kode_sat',
            'nilai_konversi',
            'sat_konversi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KonverSat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nilai' => $model->nilai, 'kode_sat' => $model->kode_sat, 'nilai_konversi' => $model->nilai_konversi, 'sat_konversi' => $model->sat_konversi]);
                 }
            ],
        ],
    ]); ?>


</div>
