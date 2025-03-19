<?php

use frontend\models\K3rsLokasiKejadian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsLokasiKejadianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Lokasi Kejadians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-lokasi-kejadian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Lokasi Kejadian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_lokasi',
            'lokasi_kejadian',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsLokasiKejadian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_lokasi' => $model->kode_lokasi]);
                 }
            ],
        ],
    ]); ?>


</div>
