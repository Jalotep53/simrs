<?php

use frontend\models\MppSkrining;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MppSkriningSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mpp Skrinings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-skrining-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mpp Skrining', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'param1',
            'param2',
            'param3',
            //'param4',
            //'param5',
            //'param6',
            //'param7',
            //'param8',
            //'param9',
            //'param10',
            //'param11',
            //'param12',
            //'param13',
            //'param14',
            //'param15',
            //'param16',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MppSkrining $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
