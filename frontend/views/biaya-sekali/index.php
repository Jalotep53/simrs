<?php

use frontend\models\BiayaSekali;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaSekaliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Biaya Sekalis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biaya-sekali-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Biaya Sekali', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_kamar',
            'nama_biaya',
            'besar_biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BiayaSekali $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya]);
                 }
            ],
        ],
    ]); ?>


</div>
