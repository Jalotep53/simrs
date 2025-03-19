<?php

use frontend\models\InventarisGambar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisGambarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Gambars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-gambar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Gambar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_inventaris',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisGambar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_inventaris' => $model->no_inventaris]);
                 }
            ],
        ],
    ]); ?>


</div>
