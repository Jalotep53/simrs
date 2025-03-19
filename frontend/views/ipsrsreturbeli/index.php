<?php

use frontend\models\Ipsrsreturbeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsreturbeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrsreturbelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrsreturbeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrsreturbeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_retur_beli',
            'tgl_retur',
            'nip',
            'kode_suplier',
            'catatan',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ipsrsreturbeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_retur_beli' => $model->no_retur_beli]);
                 }
            ],
        ],
    ]); ?>


</div>
