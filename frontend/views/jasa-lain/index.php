<?php

use frontend\models\JasaLain;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JasaLainSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jasa Lains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jasa-lain-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jasa Lain', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'thn',
            'bln',
            'id',
            'bsr_jasa',
            'ktg',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JasaLain $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'thn' => $model->thn, 'bln' => $model->bln, 'id' => $model->id, 'bsr_jasa' => $model->bsr_jasa, 'ktg' => $model->ktg]);
                 }
            ],
        ],
    ]); ?>


</div>
