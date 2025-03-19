<?php

use frontend\models\BridgingResepApotekBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingResepApotekBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Resep Apotek Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-resep-apotek-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Resep Apotek Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'no_sep_apotek',
            'tgl_sep',
            'kdpoli',
            'nmpoli',
            //'kdjenis',
            //'nota_piutang',
            //'id_user_sep',
            //'tgl_resep',
            //'tgl_pelayanan',
            //'kodedpjp',
            //'nmdpjp',
            //'iterasi',
            //'no_kartu',
            //'nama_pasien',
            //'kdppkrujukan',
            //'nmppkpelayanan',
            //'byTagRsp',
            //'byVerRsp',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingResepApotekBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep_apotek' => $model->no_sep_apotek]);
                 }
            ],
        ],
    ]); ?>


</div>
