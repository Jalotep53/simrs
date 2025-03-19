<?php

use frontend\models\DataTriaseIgddetailSkala2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala2Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Triase Igddetail Skala2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igddetail-skala2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Triase Igddetail Skala2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode_skala2',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataTriaseIgddetailSkala2 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_skala2' => $model->kode_skala2]);
                 }
            ],
        ],
    ]); ?>


</div>
