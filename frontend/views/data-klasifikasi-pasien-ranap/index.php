<?php

use frontend\models\DataKlasifikasiPasienRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataKlasifikasiPasienRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Klasifikasi Pasien Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-klasifikasi-pasien-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Klasifikasi Pasien Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'no_rawat',
            'Minimal',
            'Partial',
            'Total',
            //'kd_kamar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataKlasifikasiPasienRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
