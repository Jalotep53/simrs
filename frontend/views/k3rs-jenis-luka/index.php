<?php

use frontend\models\K3rsJenisLuka;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisLukaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Jenis Lukas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-jenis-luka-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Jenis Luka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_luka',
            'jenis_luka',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsJenisLuka $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_luka' => $model->kode_luka]);
                 }
            ],
        ],
    ]); ?>


</div>
