<?php

use frontend\models\BridgingSrbBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSrbBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Srb Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-srb-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Srb Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'no_srb',
            'tgl_srb',
            'alamat',
            'email:email',
            //'kodeprogram',
            //'namaprogram',
            //'kodedpjp',
            //'nmdpjp',
            //'user',
            //'keterangan',
            //'saran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingSrbBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep' => $model->no_sep, 'no_srb' => $model->no_srb]);
                 }
            ],
        ],
    ]); ?>


</div>
