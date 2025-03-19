<?php

use frontend\models\Kodesatuan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KodesatuanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kodesatuans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kodesatuan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kodesatuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_sat',
            'satuan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kodesatuan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_sat' => $model->kode_sat]);
                 }
            ],
        ],
    ]); ?>


</div>
