<?php

use frontend\models\K3rsJenisCidera;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisCideraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Jenis Cideras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-jenis-cidera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Jenis Cidera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_cidera',
            'jenis_cidera',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsJenisCidera $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_cidera' => $model->kode_cidera]);
                 }
            ],
        ],
    ]); ?>


</div>
