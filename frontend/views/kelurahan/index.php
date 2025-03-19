<?php

use frontend\models\Kelurahan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KelurahanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kelurahans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelurahan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelurahan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_kel',
            'nm_kel',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kelurahan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_kel' => $model->kd_kel]);
                 }
            ],
        ],
    ]); ?>


</div>
