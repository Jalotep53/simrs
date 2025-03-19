<?php

use frontend\models\Dapurpengeluaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DapurpengeluaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dapurpengeluarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapurpengeluaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dapurpengeluaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_keluar',
            'tanggal',
            'nip',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dapurpengeluaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_keluar' => $model->no_keluar]);
                 }
            ],
        ],
    ]); ?>


</div>
