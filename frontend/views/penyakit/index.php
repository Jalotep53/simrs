<?php

use frontend\models\Penyakit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penyakits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penyakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_penyakit',
            'nm_penyakit',
            'ciri_ciri:ntext',
            'keterangan',
            'kd_ktg',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penyakit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_penyakit' => $model->kd_penyakit]);
                 }
            ],
        ],
    ]); ?>


</div>
