<?php

use frontend\models\Temppanggilrm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemppanggilrmSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Temppanggilrms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temppanggilrm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Temppanggilrm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Temppanggilrm $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
