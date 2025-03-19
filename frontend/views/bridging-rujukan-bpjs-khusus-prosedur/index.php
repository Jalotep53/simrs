<?php

use frontend\models\BridgingRujukanBpjsKhususProsedur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususProsedurSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Rujukan Bpjs Khusus Prosedurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-khusus-prosedur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Rujukan Bpjs Khusus Prosedur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rujukan',
            'kode_prosedur',
            'nama_prosedur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingRujukanBpjsKhususProsedur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rujukan' => $model->no_rujukan, 'kode_prosedur' => $model->kode_prosedur]);
                 }
            ],
        ],
    ]); ?>


</div>
