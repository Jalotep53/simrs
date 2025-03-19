<?php

use frontend\models\PnmTnjBulanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PnmTnjBulananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pnm Tnj Bulanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pnm-tnj-bulanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pnm Tnj Bulanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_tnj',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PnmTnjBulanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'id_tnj' => $model->id_tnj]);
                 }
            ],
        ],
    ]); ?>


</div>
