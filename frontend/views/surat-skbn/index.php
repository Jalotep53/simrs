<?php

use frontend\models\SuratSkbn;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSkbnSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Skbns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-skbn-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Skbn', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggalsurat',
            'kategori',
            'kd_dokter',
            //'keperluan',
            //'opiat',
            //'ganja',
            //'amphetamin',
            //'methamphetamin',
            //'benzodiazepin',
            //'cocain',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratSkbn $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
