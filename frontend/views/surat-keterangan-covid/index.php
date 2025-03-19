<?php

use frontend\models\SuratKeteranganCovid;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganCovidSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Keterangan Covids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-covid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keterangan Covid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'kd_dokter',
            'nip',
            'igm',
            //'igg',
            //'sehat',
            //'tidaksehat',
            //'berlakumulai',
            //'berlakuselsai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratKeteranganCovid $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
