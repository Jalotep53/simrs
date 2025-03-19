<?php

use frontend\models\SetUrutNoRkmMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetUrutNoRkmMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Urut No Rkm Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-urut-no-rkm-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Urut No Rkm Medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'urutan',
            'tahun',
            'bulan',
            'posisi_tahun_bulan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetUrutNoRkmMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'urutan' => $model->urutan]);
                 }
            ],
        ],
    ]); ?>


</div>
