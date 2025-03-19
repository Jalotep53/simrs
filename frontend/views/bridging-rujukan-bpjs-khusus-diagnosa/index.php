<?php

use frontend\models\BridgingRujukanBpjsKhususDiagnosa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususDiagnosaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Rujukan Bpjs Khusus Diagnosas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-rujukan-bpjs-khusus-diagnosa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Rujukan Bpjs Khusus Diagnosa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rujukan',
            'status',
            'kode_diagnosa',
            'nama_diagnosa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingRujukanBpjsKhususDiagnosa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rujukan' => $model->no_rujukan, 'kode_diagnosa' => $model->kode_diagnosa]);
                 }
            ],
        ],
    ]); ?>


</div>
