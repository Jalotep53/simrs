<?php

use frontend\models\K3rsBagianTubuh;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsBagianTubuhSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Bagian Tubuhs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-bagian-tubuh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Bagian Tubuh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_bagian',
            'bagian_tubuh',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsBagianTubuh $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_bagian' => $model->kode_bagian]);
                 }
            ],
        ],
    ]); ?>


</div>
