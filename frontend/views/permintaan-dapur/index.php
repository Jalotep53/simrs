<?php

use frontend\models\PermintaanDapur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDapurSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Dapurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-dapur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Dapur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_permintaan',
            'ruang',
            'nip',
            'tanggal',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanDapur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_permintaan' => $model->no_permintaan]);
                 }
            ],
        ],
    ]); ?>


</div>
