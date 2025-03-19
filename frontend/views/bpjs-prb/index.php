<?php

use frontend\models\BpjsPrb;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BpjsPrbSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bpjs Prbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bpjs-prb-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bpjs Prb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'prb',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BpjsPrb $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep' => $model->no_sep]);
                 }
            ],
        ],
    ]); ?>


</div>
