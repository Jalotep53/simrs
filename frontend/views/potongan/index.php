<?php

use frontend\models\Potongan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PotonganSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Potongans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potongan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Potongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun',
            'bulan',
            'id',
            'bpjs',
            'jamsostek',
            //'dansos',
            //'simwajib',
            //'angkop',
            //'angla',
            //'telpri',
            //'pajak',
            //'pribadi',
            //'lain',
            //'ktg',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Potongan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tahun' => $model->tahun, 'bulan' => $model->bulan, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
