<?php

use frontend\models\KeslingLimbahDomestik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahDomestikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kesling Limbah Domestiks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-limbah-domestik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kesling Limbah Domestik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'tanggal',
            'jumlahlimbah',
            'tanggalangkut',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KeslingLimbahDomestik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
