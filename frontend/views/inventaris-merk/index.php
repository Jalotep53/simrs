<?php

use frontend\models\InventarisMerk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisMerkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Merks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-merk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Merk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_merk',
            'nama_merk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisMerk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_merk' => $model->id_merk]);
                 }
            ],
        ],
    ]); ?>


</div>
