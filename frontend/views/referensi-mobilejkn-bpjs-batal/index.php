<?php

use frontend\models\ReferensiMobilejknBpjsBatal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsBatalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Referensi Mobilejkn Bpjs Batals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-mobilejkn-bpjs-batal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Referensi Mobilejkn Bpjs Batal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'no_rawat_batal',
            'nomorreferensi',
            'tanggalbatal',
            'keterangan',
            //'statuskirim',
            //'nobooking',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ReferensiMobilejknBpjsBatal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nobooking' => $model->nobooking]);
                 }
            ],
        ],
    ]); ?>


</div>
