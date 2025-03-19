<?php

use frontend\models\K3rsDampakCidera;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsDampakCideraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Dampak Cideras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-dampak-cidera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Dampak Cidera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_dampak',
            'dampak_cidera',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsDampakCidera $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_dampak' => $model->kode_dampak]);
                 }
            ],
        ],
    ]); ?>


</div>
