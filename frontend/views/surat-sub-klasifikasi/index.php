<?php

use frontend\models\SuratSubKlasifikasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AntriapotekSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Sub Klasifikasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-sub-klasifikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Sub Klasifikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd',
            'kd_klasifikasi',
            'sub_klasifikasi',
            'no_bulanan',
            'no_tahunan',
            //'bulan',
            //'tahun',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratSubKlasifikasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd' => $model->kd]);
                 }
            ],
        ],
    ]); ?>


</div>
