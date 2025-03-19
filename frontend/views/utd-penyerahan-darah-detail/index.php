<?php

use frontend\models\UtdPenyerahanDarahDetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahDetailSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Penyerahan Darah Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penyerahan-darah-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Penyerahan Darah Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_penyerahan',
            'no_kantong',
            'jasa_sarana',
            'paket_bhp',
            'kso',
            //'manajemen',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPenyerahanDarahDetail $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_penyerahan' => $model->no_penyerahan, 'no_kantong' => $model->no_kantong]);
                 }
            ],
        ],
    ]); ?>


</div>
