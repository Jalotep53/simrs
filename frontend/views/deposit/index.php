<?php

use frontend\models\Deposit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DepositSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Deposits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deposit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Deposit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_deposit',
            'no_rawat',
            'tgl_deposit',
            'nama_bayar',
            'besarppn',
            //'besar_deposit',
            //'nip',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Deposit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_deposit' => $model->no_deposit]);
                 }
            ],
        ],
    ]); ?>


</div>
