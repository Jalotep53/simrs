<?php

use frontend\models\PiutangLainlain;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangLainlainSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Piutang Lainlains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="piutang-lainlain-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Piutang Lainlain', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_piutang',
            'tgl_piutang',
            'nip',
            'kode_peminjam',
            'kd_rek',
            //'nama_bayar',
            //'keterangan',
            //'tgltempo',
            //'nominal',
            //'sisapiutang',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PiutangLainlain $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_piutang' => $model->nota_piutang]);
                 }
            ],
        ],
    ]); ?>


</div>
