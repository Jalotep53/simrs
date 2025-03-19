<?php

use frontend\models\InsidenKeselamatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InsidenKeselamatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Insiden Keselamatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insiden-keselamatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Insiden Keselamatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_insiden',
            'nama_insiden',
            'jenis_insiden',
            'dampak',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InsidenKeselamatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_insiden' => $model->kode_insiden]);
                 }
            ],
        ],
    ]); ?>


</div>
