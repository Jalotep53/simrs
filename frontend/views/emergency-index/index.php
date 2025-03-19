<?php

use frontend\models\EmergencyIndex;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\EmergencyIndexSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Emergency Indices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergency-index-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emergency Index', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_emergency',
            'nama_emergency',
            'indek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EmergencyIndex $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_emergency' => $model->kode_emergency]);
                 }
            ],
        ],
    ]); ?>


</div>
