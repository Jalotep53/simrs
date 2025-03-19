<?php

use frontend\models\DetailPiutangPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPiutangPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Piutang Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-piutang-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Piutang Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'nama_bayar',
            'kd_pj',
            'totalpiutang',
            'sisapiutang',
            //'tgltempo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPiutangPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'nama_bayar' => $model->nama_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>
