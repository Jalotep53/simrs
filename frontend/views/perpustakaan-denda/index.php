<?php

use frontend\models\PerpustakaanDenda;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanDendaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Dendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-denda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Denda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_denda',
            'jenis_denda',
            'besar_denda',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanDenda $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_denda' => $model->kode_denda]);
                 }
            ],
        ],
    ]); ?>


</div>
