<?php

use frontend\models\Gambar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\GambarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gambars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gambar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gambar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inde',
            'bpjs',
            'nyeri',
            'inhealth',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Gambar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'inde' => $model->inde]);
                 }
            ],
        ],
    ]); ?>


</div>
