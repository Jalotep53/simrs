<?php

use frontend\models\Dapuropname;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DapuropnameSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dapuropnames';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapuropname-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dapuropname', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'h_beli',
            'tanggal',
            'stok',
            'real',
            //'selisih',
            //'nomihilang',
            //'lebih',
            //'nomilebih',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dapuropname $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
