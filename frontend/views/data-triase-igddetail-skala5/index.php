<?php

use frontend\models\DataTriaseIgddetailSkala5;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgddetailSkala5Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Triase Igddetail Skala5s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igddetail-skala5-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Triase Igddetail Skala5', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode_skala5',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataTriaseIgddetailSkala5 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_skala5' => $model->kode_skala5]);
                 }
            ],
        ],
    ]); ?>


</div>
