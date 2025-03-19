<?php

use frontend\models\SuratMap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Maps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-map-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Map', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd',
            'map',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratMap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd' => $model->kd]);
                 }
            ],
        ],
    ]); ?>


</div>
