<?php

use frontend\models\UtdKomponenDarah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdKomponenDarahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Komponen Darahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-komponen-darah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Komponen Darah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'nama',
            'lama',
            'jasa_sarana',
            'paket_bhp',
            //'kso',
            //'manajemen',
            //'total',
            //'pembatalan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdKomponenDarah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
