<?php

use frontend\models\TokoBayarPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokoBayarPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Toko Bayar Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toko-bayar-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Toko Bayar Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_bayar',
            'no_member',
            'besar_cicilan',
            'catatan',
            'nota_piutang',
            //'kd_rek',
            //'kd_rek_kontra',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TokoBayarPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_bayar' => $model->tgl_bayar, 'no_member' => $model->no_member, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]);
                 }
            ],
        ],
    ]); ?>


</div>
