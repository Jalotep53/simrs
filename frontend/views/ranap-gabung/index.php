<?php

use frontend\models\RanapGabung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RanapGabungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ranap Gabungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranap-gabung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ranap Gabung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'no_rawat2',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RanapGabung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'no_rawat2' => $model->no_rawat2]);
                 }
            ],
        ],
    ]); ?>


</div>
