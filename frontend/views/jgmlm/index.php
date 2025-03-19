<?php

use frontend\models\Jgmlm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JgmlmSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jgmlms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jgmlm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jgmlm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl',
            'id',
            'jml',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jgmlm $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl' => $model->tgl, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
