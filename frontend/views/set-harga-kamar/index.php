<?php

use frontend\models\SetHargaKamar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaKamarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Harga Kamars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-harga-kamar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Harga Kamar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_kamar',
            'kd_pj',
            'tarif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetHargaKamar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_kamar' => $model->kd_kamar, 'kd_pj' => $model->kd_pj]);
                 }
            ],
        ],
    ]); ?>


</div>
