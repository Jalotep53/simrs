<?php

use frontend\models\DetailBeriDiet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailBeriDietSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Beri Diets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-beri-diet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Beri Diet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_kamar',
            'tanggal',
            'waktu',
            'kd_diet',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailBeriDiet $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu, 'kd_diet' => $model->kd_diet]);
                 }
            ],
        ],
    ]); ?>


</div>
