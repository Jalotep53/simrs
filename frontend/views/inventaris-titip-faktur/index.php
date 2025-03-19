<?php

use frontend\models\InventarisTitipFaktur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisTitipFakturSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Titip Fakturs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-titip-faktur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Titip Faktur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_tagihan',
            'tanggal',
            'nip',
            'keterangan',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisTitipFaktur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>
