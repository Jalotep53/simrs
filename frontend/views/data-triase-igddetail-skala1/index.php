<?php

use frontend\models\DataTriaseIgddetailSkala1;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala1Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Triase Igddetail Skala1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igddetail-skala1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Triase Igddetail Skala1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode_skala1',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataTriaseIgddetailSkala1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_skala1' => $model->kode_skala1]);
                 }
            ],
        ],
    ]); ?>


</div>
