<?php

use frontend\models\DataHAIs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataHAIsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Ha Is';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-hais-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Ha Is', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'no_rawat',
            'ETT',
            'CVL',
            'IVL',
            //'UC',
            //'VAP',
            //'IAD',
            //'PLEB',
            //'ISK',
            //'ILO',
            //'HAP',
            //'Tinea',
            //'Scabies',
            //'DEKU',
            //'SPUTUM',
            //'DARAH',
            //'URINE',
            //'ANTIBIOTIK',
            //'kd_kamar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataHAIs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
