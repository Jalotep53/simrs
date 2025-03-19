<?php

use frontend\models\KeslingPestControl;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPestControlSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kesling Pest Controls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-pest-control-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kesling Pest Control', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'tanggal',
            'rincian_kegiatan:ntext',
            'rekomendasi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KeslingPestControl $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
