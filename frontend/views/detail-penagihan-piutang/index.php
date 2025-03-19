<?php

use frontend\models\DetailPenagihanPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPenagihanPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Penagihan Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-penagihan-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Penagihan Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_tagihan',
            'no_rawat',
            'sisapiutang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPenagihanPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
