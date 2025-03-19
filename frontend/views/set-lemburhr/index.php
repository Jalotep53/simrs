<?php

use frontend\models\SetLemburhr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetLemburhrSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Lemburhrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-lemburhr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Lemburhr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tnj',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetLemburhr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tnj' => $model->tnj]);
                 }
            ],
        ],
    ]); ?>


</div>
