<?php

use frontend\models\BridgingRujukanBpjsKhusus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Rujukan Bpjs Khususes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-khusus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Rujukan Bpjs Khusus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rujukan',
            'nokapst',
            'nmpst',
            'tglrujukan_awal',
            'tglrujukan_berakhir',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingRujukanBpjsKhusus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rujukan' => $model->no_rujukan]);
                 }
            ],
        ],
    ]); ?>


</div>
