<?php

use frontend\models\DetailTitipFaktur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailTitipFakturSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Titip Fakturs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-titip-faktur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Titip Faktur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_tagihan',
            'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailTitipFaktur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
