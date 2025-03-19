<?php

use frontend\models\BridgingRujukanBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Rujukan Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Rujukan Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'tglRujukan',
            'tglRencanaKunjungan',
            'ppkDirujuk',
            'nm_ppkDirujuk',
            //'jnsPelayanan',
            //'catatan',
            //'diagRujukan',
            //'nama_diagRujukan',
            //'tipeRujukan',
            //'poliRujukan',
            //'nama_poliRujukan',
            //'no_rujukan',
            //'user',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingRujukanBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rujukan' => $model->no_rujukan]);
                 }
            ],
        ],
    ]); ?>


</div>
