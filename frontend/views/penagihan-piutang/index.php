<?php

use frontend\models\PenagihanPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenagihanPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penagihan Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penagihan-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penagihan Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_tagihan',
            'tanggal',
            'tanggaltempo',
            'tempo',
            'nip',
            //'nip_menyetujui',
            //'kd_pj',
            //'catatan',
            //'kd_rek',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenagihanPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>
